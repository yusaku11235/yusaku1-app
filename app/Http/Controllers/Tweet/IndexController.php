<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $req){
        $name = $req->input('name');
        return view('tweet/result')
        ->with('name',$name);
    }
}
