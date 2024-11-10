<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MyProfileController extends Controller
{
    public function brideGroomIndex(Request $request){
        $maritalStatuses = null;
        $religions = null;
        $subReligions = null;
        $motherTongues = null;
        $castes = null;
        $subCastes = null;

        $getMaritalStatuses = Http::post('https://webapi.kettimelammatrimony.com/api/marital-statuses');
        if ($getMaritalStatuses->successful()) {
            $maritalStatuses = $getMaritalStatuses->json()['data'];
        }
        $getReligions = Http::post('https://webapi.kettimelammatrimony.com/api/religions');
        if ($getReligions->successful()) {
            $religions = $getReligions->json()['data'];
        }
        $getSubReligions = Http::post('https://webapi.kettimelammatrimony.com/api/sub-religions');
        if ($getSubReligions->successful()) {
            $subReligions = $getSubReligions->json()['data'];
        }
        $getMotherTongues = Http::post('https://webapi.kettimelammatrimony.com/api/mother-tongues');
        if ($getMotherTongues->successful()) {
            $motherTongues = $getMotherTongues->json()['data'];
        }
        $getCastes = Http::post('https://webapi.kettimelammatrimony.com/api/castes');
        if ($getCastes->successful()) {
            $castes = $getCastes->json()['data'];
        }
        $getSubCastes = Http::post('https://webapi.kettimelammatrimony.com/api/sub-castes');
        if ($getSubCastes->successful()) {
            $subCastes = $getSubCastes->json()['data'];
        }
        return view('editprofile/bride-groom',compact('maritalStatuses','religions','subReligions','motherTongues','castes','subCastes'));
    }
}
