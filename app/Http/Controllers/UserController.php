<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function logout(Request $request)
    {

        $removeToken = Http::withToken($_COOKIE['user-token'])->post('https://webapi.kettimelammatrimony.com/api/logout');
        if ($removeToken->successful()) {
            if ($removeToken->json()['status']) {
                foreach ($request->cookies as $cookieName => $cookieValue) {
                    Cookie::queue(Cookie::forget($cookieName));
                }
                return redirect()->route('index');
            } else {
                return redirect()->route('after-login');
            }
        } else {
            return redirect()->route('after-login');
        }

    }
}
