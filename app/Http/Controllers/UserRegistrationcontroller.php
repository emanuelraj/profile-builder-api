<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use App\Users;

class UserRegistrationcontroller extends Controller {

    //
	public function registerUser() {
		$requestBody = file_get_contents('php://input');
		$requestBody = json_decode($requestBody) ;
		$user = new Users;
		$user->name = Input::get('username');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();
		$response = array();
		$response['id'] = $user->id;
			return $response;
	}
}
