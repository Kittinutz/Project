<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourpackage extends Model
{
     protected $fillable = [
        'tourname', 'location', 'detail','amount','schedules_id',
    ];
       public $timestamps = true;

         public function User()
    {
        return $this->hasone('App\Schedule');
    }
}
