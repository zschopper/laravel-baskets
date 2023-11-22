<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    protected $primaryKey = 'type_id';
    protected $fillable = [
        'name', // string
        'description', // string
        'cost' // <number></number>
    ];
}
