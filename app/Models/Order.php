<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    public $table = 'orders';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'channel_uuid',
        'shipping',
        'subtotal',
        'total',
        'taxes',
        'meta_data',
        'discount',
        'mailed',
        'on_time'
    ];

    protected $casts = [
        'id' => 'integer',
        'channel_uuid' => 'string',
        'shipping' => 'json',
        'shipping_total' => 'float',
        'subtotal' => 'float',
        'total' => 'float',
        'taxes' => 'float',
        'discount' => 'float',
        'mailed' => 'boolean',
        'on_time' => 'boolean',
    ];

    public static $rules = [
        'subtotal' => 'required',
        'total' => 'required',
        'taxes' => 'required',
        'discount' => 'required',
        'mailed' => 'required'
    ];

}