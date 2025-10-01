<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsStartupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentsStartup', function (Blueprint $table) {

            $table->id();
            $table->string('documentStartup',255);

            $table->unsignedBigInteger('fk_startups_id');
            $table->foreign('fk_startups_id')->references('id')->on('startups')->onDelete('CASCADE')->onUpgrade('CASCADE');


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
        Schema::dropIfExists('documentsStartup');
    }
}
