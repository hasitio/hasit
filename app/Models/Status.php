<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';

    protected $fillable = [
        'is_yes',
        'subdomain_id'
    ];

    public function subdomain(){
        return $this->belongsTo('App\Models\Subdomain');
    }
}
