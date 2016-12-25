<?php

namespace App\Http\Controllers\API;

use Validator;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Subdomain;

class StatusController extends Controller
{
    public function getStatus($subdomain){
        $subdomain_account = Subdomain::where('name', $subdomain)->first();

        if(is_null($subdomain_account)){
            abort(404, "Could not find subdomain");
        }

        return response()->json(['status' => true]);
    }
} 
