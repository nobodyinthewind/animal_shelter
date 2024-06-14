<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table
                ->bigInteger('user_id', [])
                ->unsigned()
                ->autoIncrement()
                ->index()
                ->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table
                ->bigInteger('user_id', [])
                ->unsigned()
                ->autoIncrement()
                ->index()
                ->change();
        });
    }
};
