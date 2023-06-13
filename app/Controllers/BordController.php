<?php

namespace App\Controllers;
use App\Models\Bord;

class BordController extends BaseController
{
    public function startGame()
    {
    }
    public function showBord()
    {
        return view('bord');
    }
}