<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\DatabaseMigrations;

return new class extends Migration
{
    use DatabaseMigrations;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $collection) {
            $collection->id();
            $collection->string('first_name');
            $collection->string('last_name');
            $collection->string('gender');
            $collection->string('address');
            $collection->date('date_of_birth');
            $collection->string('no_hp');
            $collection->string('position');
            $collection->string('cv');
            $collection->enum('status', ['review','accepted','rejected'])->default('review');
            $collection->string('tell_me_yourself');
            $collection->string('test_score_a');
            $collection->string('test_score_c');
            $collection->string('test_score_e');
            $collection->string('test_score_n');
            $collection->string('test_score_o');
            $collection->string('test_result_a');
            $collection->string('test_result_c');
            $collection->string('test_result_e');
            $collection->string('test_result_n');
            $collection->string('test_result_o');
            $collection->string('personality');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
};
