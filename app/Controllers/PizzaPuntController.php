<?php

namespace App\Controllers;

use App\Models\Categorie;
use App\Models\PizzaPoints;
use App\Models\Speler;
use CodeIgniter\API\ResponseTrait;

class PizzaPuntController extends BaseController
{
    // Used to work with XHR
    use ResponseTrait;

    public function index(int $speler_id)
    {
        // Returns the view with the speler_id
        return view('punten', ['speler_id' => $speler_id]);
    }
    // Grabs all players
    public function all()
    {
        $spelerModel = new Speler(); // @TODO Speler wordt uit bordcontroller gehaald, aanpassen wanneer dit werkend is.
        $spelers = $spelerModel->findAll();
        return view('alle_punten', ['spelers' => $spelers]);
    }

    public function categories(int $speler_id)
    {
        // Creates new instance of PizzaPoints()
        $pizzaModel = new PizzaPoints();
        $score = $pizzaModel->returnScore($speler_id);
        // Returns an array as JSON
        return $this->respond($this->getCategoriesWithScore($score), 200);
    }

    private function getCategoriesWithScore(array $scores): array
    {
        $categorie = new Categorie();
        $all = $categorie->all();

        foreach ($all as &$category) {
            $category['isFilled'] = in_array($category['categorie_id'], $scores);
            // Translates the Dutch colors from the database to English so CSS can do it's magic with it
            $category['kleur'] = $categorie->translateColor($category['kleur']);
        }

        return $all;

// Hard-coded data was used first, now everything is from the database except the color translation
//        return [
//            ['name' => 'Geografie', 'color' => 'blue', 'isFilled' => in_array(1, $scores)],
//            ['name' => 'Entertainment', 'color' => 'pink', 'isFilled' => in_array(2, $scores)],
//            ['name' => 'Geschiedenis', 'color' => 'yellow', 'isFilled' => in_array(3, $scores)],
//            ['name' => 'Kunst en Literatuur', 'color' => 'purple', 'isFilled' => in_array(4, $scores)],
//            ['name' => 'Wetenschap en Natuur', 'color' => 'green', 'isFilled' => in_array(5, $scores)],
//            ['name' => 'Sport', 'color' => 'orange', 'isFilled' => in_array(6, $scores)]
//        ];
    }
}
