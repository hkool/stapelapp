<?php

namespace App\Controllers;
use App\Models\Bord;

class BordController extends BaseController
{
    public function index()
    {
        return view('bord');
    }
}