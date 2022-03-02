<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->comment('1 = Admin, 2 = User, 3 = Service Provider, 3 = Retailer');
            $table->string('name');
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            $table->string('shop_name')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('background_image')->nullable();
            $table->text('about')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('device_os');
            $table->string('device_type');
            $table->string('device_name');
            $table->string('device_token');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
