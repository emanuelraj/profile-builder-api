<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Users;

class UserRegistrationcontroller extends Controller {

    //
	public function registerUser() {
		$user = new Users;
		$user->name = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();
	}
}
