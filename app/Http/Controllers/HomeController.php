<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
       // $users = DB::select('select * from users');

        //dd($users);
        return view('clients/home');
    }
}
