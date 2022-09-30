<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User as Authenticatable;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    //protected $timestamp = false;
    protected $fillable = [
        'id',
        'email',
        'name',
        'username',
        'password',
        'permission',
        'bio',
        'img'
    ];
}
