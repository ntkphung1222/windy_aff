<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
   public function __construct()
   {
    
   }

   public function index(){
    return view('admin/categories/list');
   }

   public function getCategory($id){
    return view('admin/categories/edit');
   }

   public function addCategory(){
    return view('admin/categories/add');
   }

   public function handleAddCategory(){
    return redirect(route('categories.add'));
    //return 'sub mit  add dmuc';
   }

   public function updateCategory($id){
    return 'submit update';
   }

   public function deleteCategory($id){
    return 'delete cate submit';
   }
}
