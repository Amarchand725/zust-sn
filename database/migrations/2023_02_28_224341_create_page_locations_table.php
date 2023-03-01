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
        Schema::create('page_locations', function (Blueprint $table) {
            $table->id();
            $table->string('page_slug');
            $table->string('address');
            $table->string('city');
            $table->string('zipcode');
            $table->string('hours')->comment('No hours, Always open, Standard hours');
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
        Schema::dropIfExists('page_locations');
    }
};
