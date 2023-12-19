<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Thiagoprz\CompositeKey\HasCompositeKey;

class Basket extends Model
{
    use HasFactory, HasCompositeKey;

    public $incrementing = false;
    protected $primaryKey = ['item_id', 'user_id'];
    protected $fillable = [
        'item_id',
        'user_id'
    ];

    public function getKeyName()
    {
        return ['custom_order_id', 'custom_item_id'];
    }
}
