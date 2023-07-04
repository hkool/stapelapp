<?php

namespace App\Models;

use CodeIgniter\Model;
// Initialise PizzaPoints class
class PizzaPoints extends Model
{
  // Define table and entries
  protected $table = 'spelerscores';
  protected $primaryKey = ['speler_id', 'categorie_id'];
  protected $allowedFields = ['speler_id', 'categorie_id'];

  public function returnScore($speler_id)
  {
    // Returns the player score
    $builder = $this->db->table($this->table);
    $builder->select('categorie_id');
    $builder->where('speler_id', $speler_id);
    $query = $builder->get();
    $result = $query->getResultArray();
    return array_column($result, 'categorie_id');
  }
}
