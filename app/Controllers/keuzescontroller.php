<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class KeuzesController extends Controller
{
    // Voeg de helpers en filters toe aan de controllerklasse
    public $helpers = ['form', 'url'];
    public $filters = ['CSRF' => ['before' => ['create', 'edit']]];

    public function index()
    {
        // Laad de session helper
        helper('session');

        $data['kanten'] = ['links', 'rechts', 'beneden'];

        $session = session();

        if ($this->request->getMethod() === 'post' && $this->request->getPost('kant')) {
            $kant = $this->request->getPost('kant');

            // Haal de eerder opgeslagen kanten op uit de sessie en voeg de nieuwe kant toe
            $gekozenKanten = $session->get('gekozen_kanten', []);
            $gekozenKanten[] = $kant;

            $session->set('gekozen_kanten', $gekozenKanten);
        }

        $gekozenKanten = $session->get('gekozen_kanten', []);
        if (!empty($gekozenKanten)) {
            $data['gekozenKanten'] = $gekozenKanten;
        }

        return view('keuzesView', $data);
    }

    public function reset()
    {
        // Laad de session helper
        helper('session');

        $session = session();

        // Verwijder de opgeslagen kanten uit de sessie
        $session->remove('gekozen_kanten');

        // Redirect terug naar dezelfde pagina
        return redirect()->to('/keuzescontroller/index');
    }
}
