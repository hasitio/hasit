<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Auth;
use App\User;

class UserController extends Controller
{
    public function showProfile()
    {
      $user = \DB::table('users')->where('id', Auth::user()->id)->first();
      $subdomains = \DB::table('subdomains')->where('created_by', Auth::user()->id)->get();

      return view('profile')->with('user', $user, 'subdomains', $subdomains);
    }

    public function updateEmail(Request $request)
    {
      $this->validate($request, [
            'email' => 'required|email|max:255|unique:users',
      ]);

      \DB::table('users')
        ->where('id', Auth::user()->id)
        ->update(['email' => $request->input('email')
      ]);

      return redirect()->action('UserController@showProfile')->with('status', 'updated email');
    }
}
