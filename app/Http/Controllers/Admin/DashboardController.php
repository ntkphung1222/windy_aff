<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){

    }
    public function login(){
        return view('admin/login');
    }
    public function index(){
        return view('admin/dashboard');
    }
}
