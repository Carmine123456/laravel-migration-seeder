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
        Schema::create('trains', function (Blueprint $table) {
            
            $table->id();
            $table->string('company',200);
            $table->string('departure_station',100);
            $table->string('arrival_station',100);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code');
            $table->smallInteger('wagons_number');
            $table->string('on_time')->nullable();;
            $table->string('cancelled')->nullable();;
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
        Schema::dropIfExists('trains');
    }
};
