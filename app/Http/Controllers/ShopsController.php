<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShopsRequest;
use Illuminate\Http\Request;
use App\Shop;

class ShopsController extends Controller
{
    public function index(){
        return Shop::paginate(2);
    }

    public function store(ShopsRequest $request){
        return Shop::create($request->all());
    }

    public function getMyShops($id){
        return Shop::where('user_id', $id)->get();
    }

    public function search($term){
        return Shop::where('name','LIKE', '%'. $term . '%')->get();
    }

    public function find($id){
        return Shop::find($id);
    }
}
