<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id',10);
            $table->unsignedInterger('user_id');
            $table->unsignedInterger('subject_id');
            $table->string('description');
            $table->date('date');
            $table->timestamps();

            //chave estrangeira
            $table->foreing('user_id')->references('id')->on('users');
            $table->foreing('sujecte_id')->references('id')->on('subjectes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
