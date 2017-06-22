<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->string('link')->nullable();
            $table->string('urlToImage')->nullable();
            $table->text('description');
            $table->text('description1')->nullable();
            $table->text('description2')->nullable();
            $table->text('description3')->nullable();
            $table->string('duty1')->nullable();
            $table->string('duty2')->nullable();
            $table->string('duty3')->nullable();
            $table->double('skill1')->nullable();
            $table->double('skill2')->nullable();
            $table->double('skill3')->nullable();
            $table->double('skill4')->nullable();
            $table->double('skill5')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
}
