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
        Schema::create('patient_tables', function (Blueprint $table) {
            $table->bigincrements('id');
            $table->integer('doctor_id');
            $table->string('patient_name');
            $table->string('doctor_name');
            $table->string('specialization');
            $table->datetime('time');
            $table->date('date');
            $table->string('image');
            $table->string('gender');
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
        Schema::dropIfExists('patient_tables');
    }
};
