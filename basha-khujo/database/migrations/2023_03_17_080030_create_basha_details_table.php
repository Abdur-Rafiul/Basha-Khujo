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
        Schema::create('basha_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('basha_list_id');
            $table->string('name');
            $table->string('no')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('basha_type')->nullable();
            $table->string('bed_room')->nullable();
            $table->string('wash_room')->nullable();
            $table->string('kitchen_room')->nullable();
            $table->string('barinda')->nullable();
            $table->string('flat_position')->nullable();
            $table->string('current_bill')->nullable();
            $table->string('gash_bill')->nullable();
            $table->string('water_bill')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('sit_charge')->nullable();
            $table->string('flat_charge')->nullable();
            $table->string('gash')->nullable();
            $table->string('woner_no')->nullable();
            $table->string('division')->nullable();
            $table->string('districts')->nullable();
            $table->string('upazila')->nullable();
            $table->string('union')->nullable();
            $table->string('lift')->nullable();
            $table->string('generator')->nullable();
            $table->string('secyrity')->nullable();
            $table->string('parking')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('basha_details');
    }
};
