<?php

namespace App\Controllers;

use App\Models\VragenModel;

class VragenController extends BaseController
{
    public function getVragen()
    {
        $vragenModel = new VragenModel();
        $vragen = $vragenModel->getUnusedVragen();


        return view('vragen', ['vragen' => $vragen]);

    }
    public function submitAnswer()
    {
        $vraagId = $this->request->getVar('vraag_id');


        // Mark the question as used
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
