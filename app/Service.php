<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //Service.php
    //select field involved only

    protected $fillable = ['deviceType', 'brand', 'serialNo', 'faulty', 'cost', 'comment', 'status', 'timestamps'];

    public function users(){

      return $this->belongsToMany(User::class, 'user_service', 'users_id', 'services_id');
    }
}
