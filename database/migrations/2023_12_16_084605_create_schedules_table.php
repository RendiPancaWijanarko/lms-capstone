<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if(Schema::hasTable('schedule')) return;
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');
            $table->date('date_schedule');
            $table->text('description');
            $table->string('meet_link');
            $table->timestamps(); // Add timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule');
    }
}
