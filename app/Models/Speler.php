<?php
namespace Appp\Models;

use CodeIgniter\Model;
class UserModel extends Model{

    protected $table = 'spelers';

    public function getSpeler($color=false)
    {
        if($color == false)
        {
            return $this->findAll();
        }
        return $this->where(['color'=>$color]->first());
    }

    
}

?>