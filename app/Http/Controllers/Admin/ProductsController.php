<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct(){

    }
    public function index(){
        return view('admin/products/list');
       }
    
       public function getProducts($id){
        return view('admin/products/edit');
       }
    
       public function addProduct(){
        return view('admin/products/add');
       }
    
       public function handleAddProduct(){
        return redirect(route('product.add'));
        //return 'sub mit  add dmuc';
       }
    
       public function updateProduct($id){
        return 'submit update product';
       }
    
       public function deleteProduct($id){
        return 'delete product submit';
       }
}
