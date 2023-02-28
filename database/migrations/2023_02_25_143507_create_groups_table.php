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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('user_slug')->comment('Owner of this group');
            $table->string('slug')->comment('slug of group');
            $table->boolean('type')->default(0)->comment('0=>public 1=>private');
            $table->string('name')->comment('name of group');
            $table->string('privacy')->default(1)->comment('1=>public or 2=>private');
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
        Schema::dropIfExists('groups');
    }
};
