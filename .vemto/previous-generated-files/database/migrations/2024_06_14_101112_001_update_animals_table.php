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
                ->bigInteger('adopter_id')
                ->unsigned()
                ->after('vetter_note');
            $table
                ->foreign('adopter_id')
                ->references('id')
                ->on('adopters')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
            $table->dropColumn('adopter_id');
            $table->dropForeign('animals_adopter_id_foreign');
        });
    }
};
