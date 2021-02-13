<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class AccountController extends Controller
{
    //function for login
    public function index()
    {
        return view('account.login');
    }

    //function for login post
    public function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data))
        {
            return redirect('/dashboard');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details...');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/account');
    }
}
