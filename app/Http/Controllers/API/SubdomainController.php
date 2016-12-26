<?php

namespace App\Http\Controllers\API;

use Validator;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Subdomain;
use App\Models\Status;

class SubdomainController extends Controller
{
    public function postSubdomain(Request $request){

        $name = $request->input('name');

        if(is_null($name) || strlen($name) < 1 || ctype_alnum($name)){
            abort(400, "Did not provide a valid name for the subdomain.");
        }

        $name = strtolower($name);

        $subdomain = Subdomain::where('name', $name)->first();

        if(!is_null($subdomain)){
            abort(400, "Subdomain already exists.");
        }

        $subdomain = Subdomain::create([
            'name' => $name,
            'yes_protected' => false,
            'no_protected' => false
        ]);

        //Create a status as well.
        $status = Status::create([
            'is_yes' => false,
            'subdomain_id' => $subdomain->id
        ]);

        $subdomain->status = $status;


        return $subdomain;
    }
}
