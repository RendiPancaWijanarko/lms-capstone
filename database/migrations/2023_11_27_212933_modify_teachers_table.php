<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->bigIncrements('id')->change();
            $table->string('name', 255)->after('id');
            $table->string('email', 255)->unique()->after('name');
            $table->string('phone', 15)->nullable()->after('email');
            $table->unsignedBigInteger('category_id')->after('phone');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn(['name', 'email', 'phone', 'category_id']);
            $table->id()->change();
        });
    }
}
