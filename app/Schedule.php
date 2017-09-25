<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
     protected $fillable = [
        'time1', 'description1', 'time2', 'description2','time3', 'description3','time4', 'description4','time5', 'description5','time6', 'description6','time7', 'description7','time8', 'description8','time9', 'description9','time10', 'description10',
    ];
       public $timestamps = true;

         public function User()
    {
        return $this->hasone('App\Tourpackage');
    }
}
