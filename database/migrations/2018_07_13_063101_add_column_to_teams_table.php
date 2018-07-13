<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->string('user1');
            $table->string('user2');
            $table->string('user3');
            $table->string('user4');
            $table->string('user5');
            $table->string('user6');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn('user1');
            $table->dropColumn('user2');
            $table->dropColumn('user3');
            $table->dropColumn('user4');
            $table->dropColumn('user5');
            $table->dropColumn('user6');
        });
    }
}
