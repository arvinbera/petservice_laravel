<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_type')->comment('1 = general, 2 = pet_type')->unsigned();
            $table->unsignedInteger('parent_id')->unsigned()->default('0');
            $table->string('name');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->integer('active_status')->comment('1= Active, 2=Inactive')->unsigned()->default('1');
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
        Schema::dropIfExists('categories');
    }
}
