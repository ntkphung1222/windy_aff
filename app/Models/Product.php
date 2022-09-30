<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    //protected $timestamp = false;
    protected $primaryKey = 'product_id';
    protected $fillable = ['product_id', 'product_name','product_cate', 'product_link','product_img'];
}
