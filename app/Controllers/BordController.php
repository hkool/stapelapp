<?php

namespace App\Controllers;
use App\Models\BordModel;

class BordController extends BaseController
{
    private $bordModel;
    function __construct(){
      $this->bordModel = new BordModel();
    }
    

    public function index()
    {
        $data['coords'] = $this->bordModel->getAllCoords();

        return view('bord', $data);
    }


    
    public function startGame()
    {
    
    }
    public function showBord()
    {

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