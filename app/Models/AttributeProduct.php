<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeProduct extends Model
{
    protected $fillable = [
        'attribute_id',
        'product_id',
        'value',
        'order',
    ];
}
