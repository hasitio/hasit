<?php

namespace App\Http\Controllers\API;

use Validator;
use App\Http\Controllers\Controller;

use App\Models\Hello;

class HelloWorldController extends Controller
{
    public function getHelloWorld($account){
        $hello = new Hello;
        $hello->id = 1;

        return $account;
    }
}
