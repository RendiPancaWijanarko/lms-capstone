<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameClassNameToIdKelasInLearningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('learning', function (Blueprint $table) {
            $table->dropColumn('class_name');
            $table->integer('id_kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('learning', function (Blueprint $table) {
            $table->dropColumn('id_kelas');
            $table->string('class_name');
        });
    }
}
