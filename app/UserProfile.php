<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{

    /**
     * Define belongsTo relationship through User table .
     * and User Model
     * @method
     */
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
