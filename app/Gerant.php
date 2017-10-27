<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gerant extends Model
{
    public function gerants()
    {
        return$this->hasOne('App\Client');
    }
}
