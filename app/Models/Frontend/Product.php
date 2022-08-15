<?php

namespace App\Models\Frontend; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'pname',
        'pdes',
        'pcat',
        'subcat',
        'price',
        'status'
    ];
}
