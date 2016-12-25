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

        $subdomain = Subdomain::create([
            'name' => $request->input('name'),
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
