<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderAPIController;
use App\Models\Order;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testmp', function () {
    // MercadoPago\SDK::setAccessToken(config('mp.MP'));
    // $MP = new MercadoPago\SDK();
    //---
    // $payment  = $MP->get('/v1/payments/search?external_reference='.'rKY1QaYp341FCs4VPZsez4krN');
    // var_dump($payment['body']);
    // var_dump(json_encode($payment));
    //---
    // $payment1 = $MP->get('/v1/payments/'.'58157669784');
    // var_dump(json_encode($payment1['body']));
    return ('welcome');
});

Route::get('/tracking', function () {
    return view('tracking');
});


Route::get('/orders', [OrderAPIController::class, 'index']);
Route::get('order-courier-name', function () {
    $order = Order::find(10962);
    return $order->shipping['courier_name'];
});
