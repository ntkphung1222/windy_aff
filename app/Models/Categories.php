<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public function getListCategories(){
        $cate = DB::select('SELECT * FROM categories');
        return $cate;
    }

    public function addCategory($data){
        DB::insert('INSERT INTO categories(cate_name) VALUES (?)', $data);
    }

}
