<?php

namespace App\Controllers;

use App\Models\VragenModel;

class VragenController extends BaseController
{
    public function getVragen()
    {
        $vragenModel = new VragenModel();
        $vragen = $vragenModel->getVragen();


        return view('vragen', ['vragen' => $vragen]);

    }


}
