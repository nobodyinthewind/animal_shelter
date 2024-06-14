<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->char('ulid', 26, []);
            $table->string('name', 255, []);
            $table->string('sex', 255, []);
            $table->string('breed', 255, []);
            $table->string('age', 255, []);
            $table->date('dob', []);
            $table->string('colour', 255, []);
            $table->string('markings', 255, []);
            $table->text('note', []);
            $table->text('shortdescription', []);
            $table->integer('weight', [])->autoIncrement();
            $table->string('pic2', 255, []);
            $table->string('pic3', 255, []);
            $table->string('pic4', 255, []);
            $table->date('wormed', []);
            $table->date('fleaed', []);
            $table->date('incoming', []);
            $table->string('microchip', 255, []);
            $table->date('kennelcough', []);
            $table->date('spayedneutered', []);
            $table->integer('location', [])->autoIncrement();
            $table->date('locateddate', []);
            $table->string('status', 255, []);
            $table->date('trainingdecdue', []);
            $table->date('firstjab', []);
            $table->date('spaydecdue', []);
            $table->date('secondjab', []);
            $table->text('medicalnote', []);
            $table->date('trainingdecreturned', []);
            $table->date('spaydecreturned', []);
            $table->date('boosterdue', []);
            $table->date('stichesout', []);
            $table->dateTime('statuschange', []);
            $table->integer('dow', [])->autoIncrement();
            $table->integer('dom', [])->autoIncrement();
            $table->integer('update_chip', [])->autoIncrement();
            $table->text('assesmentnote', []);
            $table->text('othernote', []);
            $table->string('adopt_app', 255, []);
            $table->dateTime('dom_update', []);
            $table->integer('type', [])->autoIncrement();
            $table->timestamp('l_modified', []);
            $table->string('r_homing', 255, []);
            $table->string('locked', 255, []);
            $table->dateTime('lockedtime', []);
            $table->text('adopt_wording', []);
            $table->date('available_date', []);
            $table->date('updated_date', []);
            $table->date('dom_date', []);
            $table->integer('baby', [])->autoIncrement();
            $table->integer('ex_breeding', [])->autoIncrement();
            $table->integer('only_animal', [])->autoIncrement();
            $table->integer('not_mtar', [])->autoIncrement();
            $table->float('age_no', []);
            $table->dateTime('assessment_date', []);
            $table->text('vetter_note', []);
            $table
                ->bigInteger('user_id', [])
                ->unsigned()
                ->index();
            $table->timestamp('created_at', [])->nullable();
            $table->timestamp('updated_at', [])->nullable();

            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
