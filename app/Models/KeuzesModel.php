<?php

namespace App\Models;

use CodeIgniter\Model;

class KeuzesModel extends Model
{
    protected $table = 'keuzes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kant'];

    public function getGekozenKanten()
    {
        return $this->findAll();
    }

    public function addGekozenKant($kant)
    {
        $this->insert(['kant' => $kant]);
    }

    public function resetGekozenKanten()
    {
        $this->truncate();
    }
}
