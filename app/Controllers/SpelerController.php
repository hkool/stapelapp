<?php

namespace App\Controllers;
use App\Models\Speler;

class SpelerController extends BaseController
{
    public function index()
    {
        return view('dobbelsteen');
    }

    public function setAantalSpelers()
    {
        helper('form');
    
        if (!$this->request->is('post')) {
            return view('speler/create.php', ['title' => 'Geef het aantal spelers op.']);
        }
    
        $post = $this->request->getPost();
        $aantal = $post['aantal'];  // aantal spelers ophalen
    
        if ($aantal > 6) {
            $aantal = 6;
        }
    
        $kleuren = ['roze', 'groen', 'blauw', 'geel', 'paars', 'oranje'];
        $db = \Config\Database::connect();
        $db->query('TRUNCATE TABLE `spelerscores`');
        $db->query('TRUNCATE TABLE `spelers`');
    
        for ($i = 1; $i <= $aantal; $i++) {
            $naam = $post['naam' . $i]; // de naam pakken van de speler van de corresponderende input
            $kleur = $kleuren[$i - 1]; // de kleur van de speler pakken gebaseerd op de index van de for loop
    
            $speler = model('Speler');
            $speler->save([
                'kleur' => $kleur,
                'beurt' => 0,
                'naam' => $naam,
                'board_id' => 42
            ]);
        }
    
        $spelerModel = model('Speler');
        $spelers = $spelerModel->findAll();
    
        return view('speler/show', ['spelers' => $spelers]);
    }
  }    
