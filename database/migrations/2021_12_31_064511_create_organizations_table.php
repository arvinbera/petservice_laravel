<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('active_status')->comment('0 = Inactive, 1 = Active')->unsigned()->default('1');
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
        Schema::dropIfExists('organizations');
    }
}
