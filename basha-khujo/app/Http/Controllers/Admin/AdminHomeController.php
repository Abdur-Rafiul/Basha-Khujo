<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\basha_details;
use App\Models\basha_list;
use App\Models\Booking;
use App\Models\User;
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

        $user = User::count();
        $customer = Booking::count();
        $basha = basha_details::count();
        $booking = basha_details::where('status',1)->count();

        return view('Backend.Home',compact('user','customer','basha','booking'));


    }
    public function BashaList(){

        return view('Backend.Basha_List');
    }
    public function User(){

        return view('Backend.user');
    }

    public function bashaDelete(Request $request){

        $id = $request->input('id');
        $result=basha_details::where('id','=',$id)->delete();

        if($result){
            return 1;
        }else{
            return 0;
        }
    }

    public function GetUser(){

        $bashas = User::where('type',0)->get();
        return $bashas;
    }

    public function getbasha(){

        $bashas = basha_details::all();
        return $bashas;
    }

    public function GetCustomer(){

        $bashas = Booking::all();
        return $bashas;
    }
    public function editbasha(Request $req){

        $id = $req->input('id');
        $bashas = basha_details::where('id',$id)->first();
        return $bashas;
    }



    public function updatebasha(Request $req){

        //dd($req->all());
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
        $basha_id = $req->input('basha_id');
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

        $basha = basha_details::find($basha_id);
        $basha->name = $bashaName;
        $basha->no  = $bashaNo;
        $basha->division = $division;
        $basha->districts = $district;
        $basha->upazila = $upazila;
        $basha->union = $union;
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

        $basha = new basha_details();
        $basha->name = $bashaName;
        $basha->no  = $bashaNo;
        $basha->division = $division;
        $basha->districts = $district;
        $basha->upazila = $upazila;
        $basha->union = $union;
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






    public function Customer(){

        return view('Backend.customer');
    }

    public function CustomerDetails(){

        $Booking = Booking::all();

        return  $Booking;
    }

}
