<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
   protected $table = 'buceo';


   public function horas(){
  
  return $this->belongsTo('App\Horas','hora');

   }

}



