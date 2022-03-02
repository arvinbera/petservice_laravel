<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('shop_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('order_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('order_status')->comment('0=placed;1=order accepted;2=order declined;3=order processed;4=order ready for delivery ; 5=assign delivery per; 6=assign accepted by delivery person;11=assign declined by delivery boy;7=out for delivery;8=delivered;9=not delivered;10=order cancel')->unsigned()->default('1');
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
        Schema::dropIfExists('user_orders');
    }
}
