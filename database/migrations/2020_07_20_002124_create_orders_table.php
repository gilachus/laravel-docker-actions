<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('channel_uuid')->nullable()->default(null)->unique();
            $table->json('shipping')->nullable()->default(null);
            $table->double('subtotal');
            $table->double('total');
            $table->double('taxes');
            $table->double('discount');
            $table->boolean('mailed');
            $table->boolean('on_time')->nullable()->default(null);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}