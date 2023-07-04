<?php

namespace App\Models;

use CodeIgniter\Model;

class Categorie extends Model
{
    protected $table = 'categorien';
    protected $primaryKey = 'categorie_id';
    protected $allowedFields = ['naam', 'categorie_id', 'kleur'];

    public function all()
    {
        // Returns all categories as an array
        $builder = $this->db->table($this->table);
        $builder->select();
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function translateColor(string $color)
    // Translates the colors from categorien.kleur to English
    {
        switch ($color) {
            case 'Blauw': return 'blue';
            case 'Roze': return 'pink';
            case 'Geel': return 'yellow';
            case 'Paars': return 'purple';
            case 'Groen': return 'green';
            case 'Oranje': return 'orange';
        }
        return 'white';
    }
}