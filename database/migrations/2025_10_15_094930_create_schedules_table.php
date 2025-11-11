<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            /* $table->string('name');
            $table->string('roomName');
            $table->string('site')->nullable();
            $table->string('email');
            $table->string('tel');
            $table->string('nif');
            $table->enum('incubatorModel', [ 'Nome Individual', 'Sociedade por Quotas',  'Sociedade por Quotas Pluripessoal',  'Sociedade por Quotas Unipessoal', 'Sociedade Anónima', 'Cooperativas'])->nullable();
            $table->longText('StartupDetails');
            $table->unsignedBigInteger('fk_Scheldules_id');
            $table->foreign('fk_Scheldules_id')->references('id')->on('scheldules')->onDelete('CASCADE')->onUpgrade('CASCADE');
            $table->unsignedBigInteger('fk_Payments_id');
            $table->foreign('fk_Payments_id')->references('id')->on('payments')->onDelete('CASCADE')->onUpgrade('CASCADE'); */
            $table->dateTime('started')->nullable();
            $table->dateTime('end')->nullable();
            $table->boolean('status')->default(false);
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
