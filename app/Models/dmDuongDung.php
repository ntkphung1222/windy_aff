<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dmDuongDung extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'dm_duongdung';

    protected $fillable = [
        'maduongdung',
        'tenduongdung',
    ];

    public $timestamps = true;
    protected $primaryKey = 'maduongdung';


}
