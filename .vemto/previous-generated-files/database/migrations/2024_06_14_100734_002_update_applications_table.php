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
        Schema::table('applications', function (Blueprint $table) {
            $table
                ->bigInteger('adopter_id')
                ->unsigned()
                ->after('id');
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
        Schema::table('applications', function (Blueprint $table) {
            $table->dropColumn('adopter_id');
            $table->dropForeign('applications_adopter_id_foreign');
        });
    }
};
