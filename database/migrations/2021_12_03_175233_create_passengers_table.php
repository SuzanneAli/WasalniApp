<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePassengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('drive_license');
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('seats_num');
            $table->string('car_license');
            $table->timestamps();
        });
        Schema::create('rides', function (Blueprint $table) {
            $table->id();
            $table->integer('driver_id')->unsigned();
            $table->integer('car_id');
            $table->timestamps();
            $table->foreign('driver_id')->references('id')->on('drivers'); 
            $table->foreign('car_id')->references('id')->on('cars');

            $table->string('from');
            $table->string('to');
            $table->integar('actual_reservation_nums');
            $table->date('date');
            $table->timestampTz('time', $precision = 0);
            $table->float('amount',4,2);
            $table->integar('occurance');
            $table->integar('waitting');

        });
        Schema::create('reserve', function (Blueprint $table) {
            $table->timestamps();

            $table->foreign('ride_id')->references('id')->on('rides'); 
            $table->foreign('passenger_id')->references('id')->on('passengers');
            $table->integer('num_of_seats_reserved');

        });

        Schema::create('status_reserve', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ride_id');
            $table->unsignedBigInteger('passenger_id');
            $table->foreign('ride_id')->references('id')->on('rides'); 
            $table->foreign('passenger_id')->references('id')->on('passengers');
            $table->timestamps();

            $table->float('total_amount',4,2);
            $table->foreign('cancelled_resrvation')->references('id')->on('rides');
            $table->foreign('history_resrvation')->references('id')->on('rides');
            $table->foreign('upcoming_resrvation')->references('id')->on('rides');
        });
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ride_id');
            $table->unsignedBigInteger('passenger_id');
            $table->unsignedBigInteger('driver_id');
            $table->timestamps();

            $table->foreign('ride_id')->references('id')->on('rides'); 
            $table->foreign('passenger_id')->references('id')->on('passengers');
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->string('message'); 
            $table->text('message_notifyby');
            $table->dateTimeTz('created_at', $precision = 0);
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('passengers');
        //Schema::dropIfExists('drivers');        
        //Schema::dropIfExists('admins');
        //Schema::dropIfExists('rides');
        Schema::dropIfExists('message');
        Schema::dropIfExists('reserve');
        Schema::dropIfExists('status_reserve');



    }
}
