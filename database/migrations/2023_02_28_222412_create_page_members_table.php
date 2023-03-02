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
        Schema::create('page_members', function (Blueprint $table) {
            $table->id();
            $table->string('user_slug');
            $table->string('page_slug');
            $table->boolean('accept_leave')->default(0)->comment('1=>accept to become member of this page, 0=>leaved this page');
            $table->boolean('notify')->default(0);
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
        Schema::dropIfExists('page_members');
    }
};
