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
        Schema::create('animals', static function (Blueprint $table) {
            $table->ulid('id');
            $table->string('name', 255, []);
            $table->enum('sex', ['male', 'female']);
            $table->enum('type', ['cat', 'dog', 'other']);
            $table->string('breed', 255, []);
            $table->string('colour', 255, []);
            $table->string('markings', 255, [])->nullable();
            $table->text('short_description', []);
            $table->float('weight', [])->nullable();
            $table->float('age_no', [])->nullable();
            $table->string('age', [])->nullable();
            $table->string('pic2', 255, [])->nullable();
            $table->string('pic3', 255, [])->nullable();
            $table->string('pic4', 255, [])->nullable();
            $table->date('dob', [])->nullable();
            $table->enum('status', ['available', 'adopted', 'reserved', 'special-homes']);
            $table->date('status_change', [])->nullable();
            $table->date('wormed', [])->nullable();
            $table->date('fleaed', [])->nullable();
            $table->date('incoming', [])->nullable();
            $table->date('kennel_cough', [])->nullable();
            $table->date('spayed_neutered', [])->nullable();
            $table->date('spay_dec_due', [])->nullable();
            $table->date('spay_dec_returned', [])->nullable();
            $table->string('microchip', 255, [])->nullable();

            $table->date('located_date', []);
            $table->date('training_dec_due', [])->nullable();
            $table->date('first_jab', [])->nullable();
            $table->date('second_jab', [])->nullable();
            $table->text('medical_note', [])->nullable();
            $table->text('note', [])->nullable();
            $table->text('other_note', [])->nullable();
            $table->text('vetter_note', [])->nullable();
            $table->text('assessment_note', [])->nullable();
            $table->dateTime('assessment_date', [])->nullable();
            $table->text('adopt_wording', [])->nullable();
            $table->date('training_dec_returned', [])->nullable();
            $table->date('booster_due', [])->nullable();
            $table->date('stitches_out', [])->nullable();
            $table->boolean('dow', [])->nullable();
            $table->boolean('dom', [])->nullable();
            $table->boolean('update_chip', [])->nullable();
            $table->string('adopt_app', 255, [])->nullable();
            $table->dateTime('dom_update', [])->nullable();

            $table->timestamp('l_modified', []);
            $table->string('r_homing', 255, []);
            $table->string('locked', 255, [])->nullable();
            $table->dateTime('locked_time', [])->nullable();

            $table->date('available_date', [])->nullable();
            $table->date('updated_date', [])->nullable();
            $table->date('dom_date', [])->nullable();
            $table->boolean('baby', [])->nullable();
            $table->boolean('ex_breeding', [])->nullable();
            $table->boolean('only_animal', [])->nullable();
            $table->boolean('from_outside', [])->nullable();

            $table->string('located_at');
            $table->foreign('located_at')
                ->references('id')
                ->on('users');

//            $table->foreignId('user_id')
//                ->constrained()
//                ->onUpdate('cascade')
//                ->onDelete('cascade');

            $table->timestamps();
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
