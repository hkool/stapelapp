<?php

namespace App\Controllers;

use App\Models\VragenModel;

class VragenController extends BaseController
{

public function getVragen()
{
    $vragenModel = new VragenModel();
    $vragen = $vragenModel->getUnusedVragen();
    // random vraag
    $randomVraag = array_rand($vragen);
    // vragen omzetten naar objecten
    $huidigeVraag = (object) $vragen[$randomVraag];
    // laad de view vragen en geef de huidige vraag en alle vragen mee
    return view('vragen', ['huidigeVraag' => $huidigeVraag, 'vragen' => $vragen]);
}

    
    public function submitAnswer()
    {
        $vraagId = $this->request->getVar('vraag_id');


        
        $vragenModel = new VragenModel();
        // vraag markeren als gebruikt
        $vragenModel->markVraagAsUsed($vraagId);
        return redirect()->to('/vragen');
    }

    public function resetGebruikt()
    {
        $vragenModel = new VragenModel();
        // alle vragen markeren als ongebruikt
        $vragenModel->resetGebruiktField();

        return redirect()->to('/vragen');
    }
}
