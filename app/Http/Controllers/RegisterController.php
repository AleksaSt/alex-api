<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request){

        $user = User::create($request->all());
        $user['password'] = bcrypt($user['password']);
        $user->save();
    }
}
