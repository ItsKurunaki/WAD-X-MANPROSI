<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'form';
    
    protected $fillable = [
        'Nama',
        'NomorTelepon',
        'Asal',
        'SkalaGempa',
        'KataKata',
        'admin_comment',
        'is_valid'
    ];
}
