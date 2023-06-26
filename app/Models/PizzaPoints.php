<?php

namespace App\Models;

use CodeIgniter\Model;
// Initialise PizzaPoints class
class PizzaPoints extends Model
{
  // Define table and entries
  // Created 'score' in the 'spelerscores' database to get a result since there hasn't been anything implemented to register scores yet (See Userstory: 'Een gebruiker kan een pizzapunt verdienen, zodat deze een volle pizza kan verzamelen' and/or 'Het systeem kan een antwoord verwerken, zodat de gebruiker verder mag, een pizzapunt verdient of de beurt verliest')
  protected $table = 'spelerscores';
  protected $primaryKey = ['speler_id', 'categorie_id'];
  protected $allowedFields = ['speler_id', 'categorie_id', 'score'];

  public function returnScore($speler_id)
  {
    // Returns the player score
    $builder = $this->db->table($this->table);
    $builder->select(['categorie_id', 'score']);
    $builder->where('speler_id', $speler_id);
    $query = $builder->get();
    $result = $query->getResultArray();
    return $result;
  }
}
