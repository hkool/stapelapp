<?php

namespace App\Models;

use CodeIgniter\Model;

class Speler extends Model
{
    protected $table = 'spelers';
    protected $allowedFields = ['kleur', 'naam', 'board_id', 'beurt'];
    protected $positie;

    public function updatePositie($positie)//hier word het opgelagen de kant die je hebt gekozen
    {
        $this->positie = $positie;
    }

    public function getPositie()//hier word het weer naar mijn url gestuurd zodat ik kan zien welke kant ik heb gekozen
    {
        return $this->positie;
    }
}
