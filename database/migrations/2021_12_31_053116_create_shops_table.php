<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            // $table->string('shop_type')->unique()->nullable()->comment('1= Food, 2=Grocery');
            $table->string('display_id')->unique()->nullable();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('shop_name');
            $table->string('shop_address');
            $table->string('shop_description')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('shop_registration_no')->nullable();
            $table->string('shop_registration_doc')->nullable();
            $table->string('shop_photo')->nullable();
            $table->string('opening_time')->nullable();
            $table->string('closing_time')->nullable();
            $table->integer('opened_status')->comment('1 = Close, 2 = Open')->unsigned()->default('2');
            $table->string('closing_message')->nullable();
            $table->string('holiday_message')->nullable();
            $table->integer('approved_status')->comment('1 = Approve, 2 = Not approve')->unsigned()->default('2');
            $table->integer('active_status')->comment('1 = Active, 2 = Inactive')->unsigned()->default('2');
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
        Schema::dropIfExists('shops');
    }
}
