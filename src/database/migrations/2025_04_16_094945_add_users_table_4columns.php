<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsersTable4columns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //追加カラム
            $table->string('postal_code')->nullable();
            $table->string('thumbnail_path')->nullable();
            $table->string('address')->nullable();
            $table->string('building')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //追加カラム
            $table->dropColumn('postal_code');
            $table->dropColumn('thumbnail_path');
            $table->dropColumn('address');
            $table->dropColumn('building');
        });
    }
}
