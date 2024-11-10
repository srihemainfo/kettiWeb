<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MyProfileController extends Controller
{
    public function brideGroomIndex(Request $request){
        $maritalStatuses = [];
        $religions = [];
        $motherTongues = [];
        $castes = [];

        $getMaritalStatuses = Http::post('https://webapi.kettimelammatrimony.com/api/marital-statuses');
        if ($getMaritalStatuses->successful()) {
            $maritalStatuses = $getMaritalStatuses->json()['data'];
        }
        $getReligions = Http::post('https://webapi.kettimelammatrimony.com/api/religions');
        if ($getReligions->successful()) {
            $religions = $getReligions->json()['data'];
        }
        $getMotherTongues = Http::post('https://webapi.kettimelammatrimony.com/api/mother-tongues');
        if ($getMotherTongues->successful()) {
            $motherTongues = $getMotherTongues->json()['data'];
        }
        $getCastes = Http::post('https://webapi.kettimelammatrimony.com/api/castes');
        if ($getCastes->successful()) {
            $castes = $getCastes->json()['data'];
        }
        return view('editprofile/bride-groom',compact('maritalStatuses','religions','motherTongues','castes'));
    }
}
