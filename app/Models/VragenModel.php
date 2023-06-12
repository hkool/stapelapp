<?php

namespace App\Models;

use CodeIgniter\Model;

class VragenModel extends Model
{
    protected $table = 'vragen';
    protected $primaryKey = 'vraag_id';
    protected $allowedFields = ['vraagtekst', 'antwoord', 'categorie_id', 'gebruikt'];

    // vragen ophalen uit de db
    public function getVragen()
{
    $builder = $this->db->table($this->table);
    $builder->select('vraagtekst');
    $query = $builder->get();
    $result = $query->getResultArray();

    return $result;
}


    
}
