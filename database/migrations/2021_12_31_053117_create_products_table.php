<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('shop_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('display_id')->unique()->nullable();
            $table->string('name');
            $table->string('description');
            $table->string('image',555)->nullable();
            $table->string('market_price');
            $table->string('selling_price');
            $table->string('total_stock');
            $table->string('sold_stock');
            $table->string('food_type')->nullable();
            $table->integer('approved_status')->comment('1 = Approve, 2 = Not approve')->unsigned()->default('2');
            $table->integer('active_status')->comment('1 = Active, 2 = Inactive')->unsigned()->default('1');
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
        Schema::dropIfExists('products');
    }
}
