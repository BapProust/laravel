<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetenceUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	Schema::disableForeignKeyConstraints();
        Schema::create('skill_user', function (Blueprint $table) {
            $table->unsignedBigInteger('skill_id');
	    $table->foreign('skill_id')
		->references('id')
		->on('skills')
		->onDelete('cascade')
		->onUpdate('cascade');
	    $table->unsignedBigInteger('user_id');
	    $table->foreign('user_id')
		->references('id')
		->on('users')
		->onDelete('cascade')
		->onUpdate('cascade');
	    $table->primary(['skill_id', 'user_id']);
	    $table->integer('level');
	    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competence_user');
    }
}
