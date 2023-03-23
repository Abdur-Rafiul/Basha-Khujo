<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\District;
use Devfaysal\BangladeshGeocode\Models\Upazila;
use Devfaysal\BangladeshGeocode\Models\Union;

class HomeController extends Controller
{

    public function Home(){

        $divisions = Division::all();

        return view('Frontend.Home',compact('divisions'));

    }

    public function division(Request $req){

        $divisions = Division::all();


        return $divisions;

    }
    public function districts(Request $req){

        $division_id = $req->input('division_id');
        $district = District::where('division_id',$division_id)->get();
        //dd($district);

        return $district;

    }
    public function upazila(Request $req){

        $district_id = $req->input('district_id');
        $upazila = Upazila::where('district_id',$district_id)->get();
        //dd($district);

        return $upazila;

    }
    public function union(Request $req){

        $upazila_id = $req->input('upazila_id');
        $union = Union::where('upazila_id',$upazila_id)->get();
        //dd($district);

        return  $union;

    }




}
