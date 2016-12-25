<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subdomain extends Model
{

    protected $fillable = [
        'name',
        'yes_protected',
        'no_protected'
    ];


    public function status(){
        return $this->hasOne('App\Models\Status');
    }
}
