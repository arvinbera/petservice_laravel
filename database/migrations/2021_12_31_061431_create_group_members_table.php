<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_members', function (Blueprint $table) {
            $table->id();;
            $table->foreignId('group_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('status', ['confirmed', 'awaiting', 'blocking']);
            $table->tinyInteger('is_moderator');
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
        Schema::dropIfExists('group_members');
    }
}
