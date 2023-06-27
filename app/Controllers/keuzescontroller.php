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
}
