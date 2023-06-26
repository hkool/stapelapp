<?php

namespace App\Controllers;
use App\Models\Speler;
use App\Models\Board;

class MoveController extends BaseController
{
    public function moveSpelers()
    {
      $spelerModel = model('Speler');
      $spelers = $spelerModel->findAll();

      $boardModel = model('Board');
      $boards = $boardModel->findAll();

      return view('move',['spelers'=>$spelers],['boardposities'=>$boards]);
    }
}