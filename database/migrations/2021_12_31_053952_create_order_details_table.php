<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('quantity');
            $table->decimal('product_price', 10, 2);
            $table->decimal('sub_total_amount', 10, 2);
            $table->decimal('tax_amount', 10, 2);
            $table->decimal('agent_commission', 10, 2);
            $table->integer('status')->comment('0= Inactive, 1=Active')->unsigned()->default('1');
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
        Schema::dropIfExists('order_details');
    }
}
