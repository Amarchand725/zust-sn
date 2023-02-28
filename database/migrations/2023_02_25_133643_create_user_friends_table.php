<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_friends', function (Blueprint $table) {
            $table->id();
            $table->string('user_slug');
            $table->string('friend_slug');
            $table->string('un_friend_by_slug')->nullable()->comment('slug of user who make unfriend.');
            $table->boolean('notify')->default(0)->comment('user requested to become friend');
            $table->boolean('accept_reject')->default(0)->comment('1=accepted 2=rejected');
            $table->boolean('un_friend')->default(0);
            $table->boolean('status')->default(1);
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_friends');
    }
};
