<?php

namespace App\Repositories;

use App\Models\Order;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderRepository
 * @package App\Repositories
 * @version July 20, 2020, 3:08 am UTC
*/

class OrderRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'channel_uuid',
        'shipping',
        'subtotal',
        'total',
        'taxes',
        'discount',
        'mailed',
        'on_time'
    ];

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    public function model()
    {
        return Order::class;
    }
}