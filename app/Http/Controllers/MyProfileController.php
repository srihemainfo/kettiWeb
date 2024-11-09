<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MyProfileController extends Controller
{
    public function brideGroomIndex(Request $request){
        // dd(env('WEB_APIURL').'/marital-statuses');
        $maritalStatuses = Http::post(env('WEB_APIURL').'/marital-statuses');
        dd($maritalStatuses);
        return view('editprofile/bride-groom');
    }
}
