<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TeacherApplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
      Schema::create('teacher_applications', function (Blueprint $table) {
        $table->id();
        $table->string('nama_sekolah');
        $table->string('nama_pengetua');
        $table->string('email_sekolah');
        $table->string('nombor_telefon');
        $table->string('nombor_faks');
        $table->string('nama_guru');
        $table->string('nombor_tel_guru');
        $table->string('subjek_diajar');
        $table->string('jantina');
        $table->string('gred_guru');
        $table->string('username');
        $table->string('password');
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
        Schema::dropIfExists('teacher_applications');
    }
}
