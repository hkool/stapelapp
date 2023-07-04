<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\VragenModel;

class KeuzesController extends Controller
{
    public $helpers = ['form', 'url'];
    public $filters = ['CSRF' => ['before' => ['create', 'edit']]];

    public function index()
    {
        helper('session');
        $data['kanten'] = ['links', 'rechts', 'beneden'];
        $session = session();

        if ($this->request->getMethod() === 'post' && $this->request->getPost('kant')) {
            $kant = $this->request->getPost('kant');
            $gekozenKanten = $session->get('gekozen_kanten', []);
            $gekozenKanten[] = $kant;
            $session->set('gekozen_kanten', $gekozenKanten);

            // Update de positie van de speler in de database
            $spelerModel = new \App\Models\Speler();
            $boardId = 1; // Vervang dit met het daadwerkelijke board_id van de speler
            $positie = $kant; // De gekozen positie
            $spelerModel->updatePositie($boardId, $positie);

            // Haal de positie opnieuw op vanuit de database en geef deze door aan de view
            $positie = $spelerModel->getPositie($boardId);
            $data['positie'] = $positie;
        }

        $gekozenKanten = $session->get('gekozen_kanten', []);
        if (!empty($gekozenKanten)) {
            $data['gekozenKanten'] = $gekozenKanten;
        }

        $vragenModel = new VragenModel();
        $vragen = $vragenModel->getUnusedVragen();

        if (!empty($vragen)) {
            $data['vragen'] = $vragen;
        }

        return view('keuzesView', $data);
    }

    public function reset()
    {
        helper('session');
        $session = session();
        $session->remove('gekozen_kanten');
        return redirect()->to('/keuzescontroller/index');
    }

    public function getVragen()
    {
        $vragenModel = new VragenModel();
        $vragen = $vragenModel->getUnusedVragen();
        $data['vragen'] = $vragen;
        return view('vragen', $data);
    }

    public function submitAnswer()
    {
        $vraagId = $this->request->getVar('vraag_id');
        $vragenModel = new VragenModel();
        $vragenModel->markVraagAsUsed($vraagId);
        return redirect()->to('/vragen');
    }

    public function resetGebruikt()
    {
        $vragenModel = new VragenModel();
        $vragenModel->resetGebruiktField();
        return redirect()->to('/vragen');
    }

    // ...

public function nieuwe_kant()
{
    // ...

    if ($this->request->getMethod() === 'post' && $this->request->getPost('kant')) {
        // ...

        // Update de positie van de speler in het Speler-model
        $spelerModel = new \App\Models\Speler();
        $spelerId = 1; // Vervang dit met het daadwerkelijke speler_id van de speler
        $positie = $kant; // De gekozen positie
        $spelerModel->positie = $positie; // Stel de positie in op het model
        $spelerModel->save(); // Sla het model op in de database

        // Haal de positie opnieuw op vanuit het Speler-model en geef deze door aan de view
        $positie = $spelerModel->positie;
        $data['positie'] = $positie;

        // ...

        // Geef de gekozen kant door aan de view
        $data['gekozenKant'] = $kant;

        return view('keuzesView', $data);
    }

    // ...
}

    
}
