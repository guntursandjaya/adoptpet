<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    // Table Name
    protected $table = 'pets';

    //Primary Key
    public $primaryKey = 'id';

    // Time Stamps
    public $timestamps = true;

    public function User(){
        return $this->belongsTo('App\User');
    }
}
