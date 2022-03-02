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
            $table->string('display_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('delivery_address');
            $table->string('pin_code');
            $table->decimal('sub_total_amount', 10, 2);
            $table->decimal('tax_amount', 10, 2);
            $table->decimal('delivery_charge', 10, 2);
            $table->decimal('other_charge', 10, 2)->nullable();
            $table->decimal('total_amount', 10, 2);
            $table->decimal('discount_amount', 10, 2)->nullable();
            $table->string('wallet_balance_used')->nullable();
            $table->string('special_request')->nullable();
            $table->string('received_date')->nullable();
            $table->string('received_time')->nullable();
            $table->integer('total_product')->unsigned();
            $table->integer('order_status')->comment('0=placed;1=order accepted;2=order declined;3=order processed;4=order ready for delivery ; 5=assign delivery per; 6=assign accepted by delivery person;11=assign declined by delivery boy;7=out for delivery;8=delivered;9=not delivered;10=order cancel')->unsigned()->default('1');
            $table->integer('payment_mode')->comment('1= COD, 2=Online')->unsigned();
            $table->integer('pay_status')->comment('0= Inactive, 1=Active')->unsigned()->default('1');
            $table->integer('active_status')->comment('0= Inactive, 1=Active')->unsigned()->default('1');
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
