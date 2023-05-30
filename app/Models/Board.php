<?php

namespace App\Models;

use CodeIgniter\Model;

class Board extends Model
{
    protected $table = 'boardposities';
    protected $allowedFields = ['categorie_id', 'vooruit_id', 'achteruit_id', 'zijwaarts_id','winning_positie','center_positie'];
}