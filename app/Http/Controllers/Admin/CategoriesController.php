<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Object_;
use App\Models\Categories;

class CategoriesController extends Controller
{
    private $cate;
    public function __construct()
    {
        $this->cate = new Categories();
    }

    public function index()
    {
        $header = [
            '#',
            'Name',
            'Delete'    
        ];
        //$cate = new Categories();
        $cateList = $this->cate->getListCategories();
        return view('admin/categories/index', compact('cateList','header'));
    }

    public function getCategory($id)
    {
        return view('admin/categories/edit');
    }

    public function postAddCategory(Request $request){
        $request->validate([
            'cate_name' => 'required',
        ],[
            'cate_name.required' => 'Please enter category name!'
        ]);

        $dataInsert = [
            'cate_name' => $request->cate_name,
        ];
        $this->cate->addCategory($dataInsert);
        return redirect()->route('categories.index')->with('msg','Successfully!');
    }

    public function handleAddCategory()
    {
        return redirect(route('categories.add'));
        //return 'sub mit  add dmuc';
    }

    public function updateCategory($id)
    {
        return 'submit update';
    }

    public function deleteCategory($id)
    {
        return 'delete cate submit';
    }
}
