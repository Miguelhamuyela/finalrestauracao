<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutinspectionsTable extends Migration
{

    
    public function up()
    {
        Schema::create('autinspections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
           // $table->string('roomName');
          //  $table->string('site')->nullable();
            $table->string('email');
            $table->string('tel');
            $table->string('nif');
          //  $table->enum('incubatorModel', ['Residente', 'Não Residente']);

            $table->string('numberRoomm');
            $table->string('bedNumber');
            $table->string('tableNumber');
            $table->string('yearSelfinspection');

            $table->string('monthselfInspection');
            $table->string('workforce');
            $table->string('men');
            $table->string('women');
            $table->string('expatriateWork');
            $table->string('agreeInstallation');

            $table->longText('StartupDetails');

            $table->unsignedBigInteger('fk_Scheldules_id');
            $table->foreign('fk_Scheldules_id')->references('id')->on('scheldules')->onDelete('CASCADE')->onUpgrade('CASCADE');

            $table->unsignedBigInteger('fk_Payments_id');
            $table->foreign('fk_Payments_id')->references('id')->on('payments')->onDelete('CASCADE')->onUpgrade('CASCADE');

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
        Schema::dropIfExists('autinspections');
    }
}
