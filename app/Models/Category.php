<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    //protected $timestamp = false;
    protected $primaryKey = 'cate_id';
    protected $fillable = ['cate_id', 'cate_name'];
}