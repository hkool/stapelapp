<?php

namespace App\Controllers;
use App\Models\Bord;

class BordController extends BaseController
{
    public function index()
    {
        return view('bord');
    }
    public function startGame()
    {
    
    }
    public function showBord()
    {
        return view('bord');
    }
    public function huidigeSpeler()
    {
        /*welke speler is aan de beurt*/
    }
    public function huidigeVraag()
    {
        /*welke vraag heeft de speler*/
    }
}