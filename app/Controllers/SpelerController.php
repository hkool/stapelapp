<?php

namespace App\Controllers;
use App\Models\Speler;

class SpelerController extends BaseController
{
    

    public function setAantalSpelers()
    {
        helper('form');
        if(!$this->request->is('post'))
        {
            return view('speler/create.php',['title'=>'Geef het aantal spelers op.']);
        }
      $post = $this->request->getPost(['aantal']);
      if(! $this->validateData($post,
      ['aantal'=>'required']))
      {
        return view(['title'=>'Geef het aantal spelers op.'],'speler/create.php');
      } 
      $aantal = $post['aantal'];
      if($aantal>6){$aantal = 6;}
      $kleuren=['roze','groen','blauw','geel','paars','oranje'];
      $db = \Config\Database::connect();
      $db->query('TRUNCATE TABLE `spelerscores`');
      $db->query('TRUNCATE TABLE `spelers`');
      for($i=0;$i<$aantal;$i++)
      {
        $speler=model('Speler');
        $speler->save([
            'kleur'=>$kleuren[$i],
            'beurt'=>0,
            'naam'=>'anoniem',
            'board_id'=>42
        ]);
      } 
      $spelerModel = model('Speler');
      
      $spelers = $spelerModel->findAll();
      return view('speler/show',['spelers'=>$spelers]);
    }

    public function setKleur() {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['kleur'])) {
            $selectedKleur = $_POST['kleur'];
            
            $playerId = $_POST['id'];

            $db = \Config\Database::connect();
            $db->query("UPDATE spelers SET kleur = '{$selectedKleur}' WHERE id = {$playerId}");
        }
      }
    }
}