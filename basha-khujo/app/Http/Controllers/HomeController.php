<?php

namespace App\Http\Controllers;

use App\Models\basha_details;
use App\Models\Booking;
use App\Models\User;
use Devfaysal\BangladeshGeocode\Models\District;
use Devfaysal\BangladeshGeocode\Models\Division;
use Devfaysal\BangladeshGeocode\Models\Union;
use Devfaysal\BangladeshGeocode\Models\Upazila;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /**

     * Create a new controller instance.

     *

     * @return void

     */





    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function Contact()

    {

        return view('Frontend.contact');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function adminHome()

    {
        $user = User::count();
        $customer = Booking::count();
        $basha = basha_details::count();

        return view('adminHome',compact('user','customer','basha'));

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function managerHome()

    {

        return view('managerHome');

    }


    public function Home()
    {

        $divisions = Division::all();
        $bashas = basha_details::simplePaginate(10);

        return view('Frontend.Home', compact('divisions', 'bashas'));

    }

    public function basha_details($id)
    {

        $basha = basha_details::where('id', $id)->first();

        return view('Frontend.basha_details', compact('basha'));
    }

    public function division(Request $req)
    {

        $divisions = Division::all();


        return $divisions;

    }

    public function districts(Request $req)
    {

        $division_id = $req->input('division_id');
        $district = District::where('division_id', $division_id)->get();
        //dd($district);

        return $district;

    }

    public function upazila(Request $req)
    {

        $district_id = $req->input('district_id');
        $upazila = Upazila::where('district_id', $district_id)->get();
        //dd($district);

        return $upazila;

    }

    public function union(Request $req)
    {

        $upazila_id = $req->input('upazila_id');
        $union = Union::where('upazila_id', $upazila_id)->get();
        //dd($district);

        return $union;

    }


    public function getBashaFrontend(Request $request){

        $bashas = basha_details::where('division',$request->division)->where('districts',$request->district)
            ->where('upazila',$request->upazila)->where('union',$request->union)->orderBy('id', 'desc')->simplePaginate(2);
        $divisions = Division::all();


        if($bashas){
            return view('Frontend.Home', compact( 'bashas','divisions'));
        }else{
            $divisions = Division::all();
            $bashas = basha_details::orderBy('id', 'desc')->simplePaginate(2);

            return view('Frontend.Home', compact('divisions', 'bashas'));


        }
        // return $basha;
    }



    public function basha_booking($id)
    {
        $basha = basha_details::where('id', $id)->first();
        return view('Frontend.booking_address',compact('basha'));

    }

}
