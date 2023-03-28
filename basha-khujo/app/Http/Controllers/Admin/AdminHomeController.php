<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\basha_details;
use App\Models\basha_list;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\File;
class AdminHomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Home(){

        return view('Backend.Home');
    }
    public function BashaList(){

        return view('Backend.Basha_List');
    }

    public function getbasha(){

        $bashas = basha_details::all();
        return $bashas;
    }
    public function editbasha(Request $req){

        $id = $req->input('id');
        $bashas = basha_details::where('id',$id)->first();
        return $bashas;
    }
    public function bashaAdd(Request $req){

        $bashaNo = $req->input('bashaNo');
        $woner_no = $req->input('woner_no');
        $bashaName = $req->input('bashaName');
        $flat_position = $req->input('flat_position');
        $barinda_room = $req->input('barinda_room');
        $barinda_room = $req->input('barinda_room');
        $kitchen_room = $req->input('kitchen_room');
        $wash_room = $req->input('wash_room');
        $bed_room = $req->input('bed_room');
        $basha_type = $req->input('basha_type');
        $union = $req->input('union');
        $upazila = $req->input('upazila');
        $district = $req->input('district');
        $division = $req->input('division');
        $gas_supply = $req->input('gas_supply');
        $lift = $req->input('lift');
        $generator = $req->input('generator');
        $security = $req->input('security');
        $parking = $req->input('parking');
        $Current_bill = $req->input('Current_bill');
        $gas_bill = $req->input('gas_bill');
        $water_bill = $req->input('water_bill');
        $service_charge = $req->input('service_charge');
        $sit_charge = $req->input('sit_charge');
        $basha_charge = $req->input('basha_charge');
        $description = $req->input('description');
        $FileKey4 = $req->file('FileKey4')->store('public');
        $FileKey3 = $req->file('FileKey3')->store('public');
        $FileKey2 = $req->file('FileKey2')->store('public');
        $FileKey1 = $req->file('FileKey1')->store('public');
//        dd($FileKey1);
        $FileKey1=explode("/", $FileKey1)[1];
        $FileKey2=explode("/", $FileKey2)[1];
        $FileKey3=explode("/", $FileKey3)[1];
        $FileKey4=explode("/", $FileKey4)[1];

        $FileKey4 = "http://".$_SERVER['HTTP_HOST']."/storage/".$FileKey4;
        $FileKey3 = "http://".$_SERVER['HTTP_HOST']."/storage/".$FileKey3;
        $FileKey2 = "http://".$_SERVER['HTTP_HOST']."/storage/".$FileKey2;
        $FileKey1 = "http://".$_SERVER['HTTP_HOST']."/storage/".$FileKey1;

        //dd( $FileKey2);

        $basha_list = new basha_list();
        $basha_list->name = $bashaName;
        $basha_list->no  = $bashaNo;
        $basha_list->division = $division;
        $basha_list->districts = $district;
        $basha_list->upazila = $upazila;
        $basha_list->union = $union;
        $basha_list->img = $FileKey1;
        $basha_list->save();

        $basha_id = basha_list::max('id');
        $basha = new basha_details();
        $basha->basha_list_id = $basha_id;
        $basha->name = $bashaName;
        $basha->no = $bashaNo;
        $basha->img1 = $FileKey1;
        $basha->img2 = $FileKey2;
        $basha->img3 = $FileKey3;
        $basha->img4 = $FileKey4;
        $basha->basha_type = $basha_type;
        $basha->bed_room = $bed_room;
        $basha->wash_room = $wash_room;
        $basha->kitchen_room = $kitchen_room;
        $basha->barinda = $barinda_room;
        $basha->flat_position = $flat_position;
        $basha->current_bill = $Current_bill;
        $basha->gash_bill = $gas_bill;
        $basha->water_bill = $water_bill;
        $basha->service_charge = $service_charge;
        $basha->sit_charge = $sit_charge;
        $basha->flat_charge = $basha_charge;
        $basha->gash = $gas_supply;
        $basha->woner_no = $woner_no;
        $basha->division = $division;
        $basha->districts = $district;
        $basha->upazila = $upazila;
        $basha->union = $union;
        $basha->lift = $lift;
        $basha->generator = $generator;
        $basha->secyrity = $security;
        $basha->parking = $parking;
        $basha->description = $description;
        $basha->status = 0;
        $basha->save();


        return 1;

    }






    public function Booking(){

        return view('Backend.booking');
    }

    public function BookingDetails(){

        $Booking = Booking::all();

        return  $Booking;
    }

}
