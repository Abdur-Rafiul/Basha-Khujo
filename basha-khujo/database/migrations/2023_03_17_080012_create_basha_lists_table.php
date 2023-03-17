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
        Schema::create('basha_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('no')->nullable();
            $table->string('img')->nullable();
            $table->string('division')->nullable();
            $table->string('districts')->nullable();
            $table->string('upazila')->nullable();
            $table->string('union')->nullable();
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
        Schema::dropIfExists('basha_lists');
    }
};
