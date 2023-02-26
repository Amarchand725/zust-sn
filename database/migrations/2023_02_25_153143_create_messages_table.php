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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('message_thread');
            $table->bigInteger('reciever_slug')->comment('recieveer');
            $table->text('message')->nullable();
            $table->string('mime_type')->nullable();
            $table->string('content')->nullable()->comment('Image or video or file');
            $table->boolean('is_read')->default(0)->comment('0=>unread 1=>read');
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
        Schema::dropIfExists('messages');
    }
};
