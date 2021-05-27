<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //Service.php
    //select field involved only

    protected $fillable = ['user_id', 'name', 'deviceType', 'brand', 'serialNo', 'faulty', 'cost'];



    /*public function projectusers() {
      return $this->hasOne('App\Project', 'user_id', 'id);
    }*/

    public function types(){
      return $this->belongsToMany(Type:: class);
      //file location app/Type.php
    }


}
