<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditoriumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auditoriums', function (Blueprint $table) {

            $table->id();
            $table->string('titleConference');

            $table->unsignedBigInteger('fk_Scheldules_id');
            $table->foreign('fk_Scheldules_id')->references('id')->on('scheldules')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_Schelduling_id');
            $table->foreign('fk_Schelduling_id')->references('id')->on('scheduling')->onDelete('CASCADE')->onUpgrade('CASCADE');


            $table->unsignedBigInteger('fk_Payments_id');
            $table->foreign('fk_Payments_id')->references('id')->on('payments')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_Clients_id');
            $table->foreign('fk_Clients_id')->references('id')->on('clients')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->softDeletes();
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
        Schema::dropIfExists('auditoriums');
    }
}
