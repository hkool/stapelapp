<?php

namespace App\Models;

use CodeIgniter\Model;

class BordModel extends Model
{
    protected $table = 'boardposities';
    protected $allowedFields = ['coords'];

    public function getAllCoords()
    {
        return $this->findAll();
    }
}