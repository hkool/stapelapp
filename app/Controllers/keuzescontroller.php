<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class KeuzesController extends Controller
{
    public function index()
    {
        // Laad de session helper
        helper('session');

        $data['kanten'] = array('links', 'rechts', 'beneden');

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
}