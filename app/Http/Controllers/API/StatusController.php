<?php

namespace App\Http\Controllers\API;

use Validator;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Subdomain;
use App\Models\Status;

class StatusController extends Controller
{
    public function getStatus($subdomain){
        $subdomain_account = Subdomain::with('status')->where('name', $subdomain)->first();

        if(is_null($subdomain_account)){
            abort(404, "Could not find subdomain");
        }

        $status = $subdomain_account->status;

        if($status->is_yes){
            return response()->json(['status' => "yes"]);
        } else {
            return response()->json(['status' => "no"]);
        }

    }

    public function putStatusYes($subdomain){
        $subdomain_account = Subdomain::with('status')->where('name', $subdomain)->first();

        if(is_null($subdomain_account)){
            abort(404, "Could not find subdomain");
        }

        $status = $subdomain_account->status;

        //If it's not true, set it to true and save.

        if(!$status->is_yes){
            $status->is_yes = true;
            $status->save();
        }

        return response()->json(['status' => "yes"]);
    }

    public function putStatusNo($subdomain){
        $subdomain_account = Subdomain::with('status')->where('name', $subdomain)->first();

        if(is_null($subdomain_account)){
            abort(404, "Could not find subdomain");
        }

        $status = $subdomain_account->status;

        //If it's true, set it to false and save.
        if($status->is_yes){
            $status->is_yes = false;
            $status->save();
        }

        return response()->json(['status' => "no"]);
    }


}
