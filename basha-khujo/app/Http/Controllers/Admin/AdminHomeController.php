<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function Home(){

        return view('Backend.Home');
    }
    public function BashaList(){

        return view('Backend.Basha_List');
    }
}
