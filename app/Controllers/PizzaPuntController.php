<?php

namespace App\Controllers;

use App\Models\PizzaPoints;

class PizzaPuntController extends BaseController
{

  public function getRemainingPizzaPoints($speler_id)
  {
    // Creates new instance of PizzaPoints()
    $pizzaModel = new PizzaPoints();
    // Grabs the user ID from the database ( had to change the table since there was no PK and AI (needs to be changed in the Production Database))
    $score = $pizzaModel->returnScore($speler_id);
    echo '<pre>';
    print_r($score);
  }
}
