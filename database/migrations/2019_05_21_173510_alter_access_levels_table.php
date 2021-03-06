<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAccessLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('access_levels', function (Blueprint $table) {
            $table->unsignedInteger('status_id')->default(1)->after('description');
            $table->foreign('status_id')->references('id')->on('status'); 
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('access_levels', function (Blueprint $table) {
            $table->dropColumn("status_id");
        });
    }
}
