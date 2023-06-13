<?php

namespace App\Controllers;

class DiceController extends BaseController
{
    public function index()
    {
        return view('dobbelsteen');
    }
    public function show()
    {
        $getal = rand(1, 6);
        $data['getal'] = $getal;
        $data['timestamp'] = time(); // Add current timestamp as a query string parameter
    
        return view('dobbelsteen', $data);
    }
}
