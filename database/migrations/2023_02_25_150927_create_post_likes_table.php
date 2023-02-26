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
        Schema::create('post_likes', function (Blueprint $table) {
            $table->id();
            $table->string('user_slug');
            $table->string('post_slug');
            $table->boolean('like')->default(0)->comment('1=>liked 0=>removed from liked');
            $table->boolean('dis_like')->default(0)->comment('1=>disliked 0=>removed from disliked');
            $table->boolean('love')->default(0)->comment('1=>loved 0=>removed from love');
            $table->boolean('care')->default(0)->comment('1=>care 0=>removed from care');
            $table->boolean('smile')->default(0)->comment('1=>smile 0=>removed from smile');
            $table->boolean('wow')->default(0)->comment('1=>wow 0=>removed from smile');
            $table->boolean('sad')->default(0)->comment('1=>sad 0=>removed from smile');
            $table->boolean('angry')->default(0)->comment('1=>angry 0=>removed from smile');
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
        Schema::dropIfExists('post_likes');
    }
};
