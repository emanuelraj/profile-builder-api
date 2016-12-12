<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserLoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
		
        if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')])) {
            // Authentication passed...
            return "true";
        } else {
			return "false";
		}
    }
}