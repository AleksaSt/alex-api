<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ManagersController extends Controller
{
    public function index(){
        return User::paginate(2);
    }
}
