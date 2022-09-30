<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$product = Product::all();
        $product = DB::table('products')->join('categories', 'categories.cate_id', '=', 'products.product_cate')->get();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::all();
        return view('admin.product.create', compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'product_name' => 'required|max:255',
            'product_cate' => 'required|max:255', 
            'product_link' => 'required|max:255',
            'product_img' => 'required|max:255',
        ]);
        $product = Product::create($storeData);
        return redirect('/admin/product')->with('completed', 'Product has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cates = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product','cates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'product_name' => 'required|max:255',
            'product_cate' => 'required|max:255',
            'product_link' => 'required|max:255',
            'product_img' => 'required|max:255',
        ]);

        
        //DB::update('update categories set cate_name = 100 where name = ?', ['John']);
        Product::where('product_id',$id)->update($updateData);
        return redirect('/admin/product')->with('completed', 'Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/admin/product')->with('completed', 'Product has been deleted');
    }
}
