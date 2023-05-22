<?php

namespace App\Models;

use CodeIgniter\Model;

class Speler extends Model
{
    protected $table = 'spelers';
    protected $allowedFields = ['kleur', 'naam', 'board_id', 'beurt'];
}