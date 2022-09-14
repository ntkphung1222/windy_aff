<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dm_DuongDungController extends Controller
{
    //
    public function create(){
        $users = DB::select('select * from users');

        return view('duongdung.index',$users);
    }
}
