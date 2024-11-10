<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    public function logout(Request $request){

        foreach ($request->cookies as $cookieName => $cookieValue) {
            Cookie::queue(Cookie::forget($cookieName));
        }
        return redirect()->route('index');
    }
}
