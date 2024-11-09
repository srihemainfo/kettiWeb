<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function tt(Request $request){
        dd($_COOKIE, $request);
    }
}
