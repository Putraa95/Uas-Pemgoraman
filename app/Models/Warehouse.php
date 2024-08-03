<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    // Menambahkan atribut yang diizinkan untuk mass assignment
    protected $fillable = [
        'name',
        'location',
        'capacity',
    ];
}