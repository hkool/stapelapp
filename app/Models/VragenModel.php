<?php

namespace App\Models;

use CodeIgniter\Model;

class VragenModel extends Model
{
    protected $table = 'vragen';
    protected $primaryKey = 'vraag_id';
    protected $allowedFields = ['vraagtekst', 'antwoord', 'categorie_id', 'gebruikt'];

    // vragen ophalen uit de db
    public function getUnusedVragen()
    {
        $builder = $this->db->table($this->table);
        $builder->select('vraag_id, vraagtekst, antwoord');
        $builder->where('gebruikt', 0); // filter de gebruikte vragen eruit (0)
        $query = $builder->get();
        $result = $query->getResultArray();

        return $result;
    }

    public function markVraagAsUsed($vraagId)
    {
        $builder = $this->db->table($this->table);
        $builder->set('gebruikt', 1); // markeer de vraag als gebruikt (1)
        $builder->where('vraag_id', $vraagId);
        $builder->update();
    }

    public function resetGebruiktField()
    {
        $builder = $this->db->table($this->table);
        $builder->set('gebruikt', 0); // reset alle vragen naar ongebruikt (0) 
        $builder->update();
    }
    
    public function getVragenByCategorie($categoryId)
    {
        $builder = $this->db->table($this->table);
        $builder->select('vraagtekst');
        $builder->where('categorie_id', $categoryId);
        $query = $builder->get();
        $result = $query->getResultArray();

        return $result;
    }
}
