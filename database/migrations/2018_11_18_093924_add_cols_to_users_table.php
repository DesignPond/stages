<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('rue')->nullable();
            $table->string('npa');
            $table->string('ville');
            $table->integer('canton_id')->nullable();
            $table->string('telephone')->nullable();
            $table->string('fax')->nullable();
            $table->string('cp')->nullable();
            $table->string('complement')->nullable();
            $table->string('website')->nullable();
            $table->text('social')->nullable();
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
            $table->dropColumn('rue');
            $table->dropColumn('npa');
            $table->dropColumn('ville');
            $table->dropColumn('telephone');
            $table->dropColumn('fax');
            $table->dropColumn('cp');
            $table->dropColumn('complement');
            $table->dropColumn('website');
            $table->dropColumn('social');
        });
    }
}
