<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $product = Product::all();
        
        $user = User::all();

        //$user = User::select('name','bio')->where('id',1)->get();
        //$user = json_encode($user, JSON_UNESCAPED_UNICODE );
        return view('clients.home', compact('product', 'user'));
    }
}
