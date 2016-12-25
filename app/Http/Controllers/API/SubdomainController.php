<?php

namespace App\Http\Controllers\API;

use Validator;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Subdomain;

class SubdomainController extends Controller
{
    public function postSubdomain(Request $request){
        $subdomain = Subdomain::create([
            'name' => $request->input('name'),
            'yes_protected' => false,
            'no_protected' => false
        ]);

        return $subdomain;
    }
}
