<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoworksMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coworks_member', function (Blueprint $table) {
            $table->id();
            $table->string('occupation');
            $table->string('email');
            $table->string('tel');
            $table->string('name');
            $table->string('nif');
            $table->string('foto')->nullable();

            $table->unsignedBigInteger('fk_coworks_id');
            $table->foreign('fk_coworks_id')->references('id')->on('coworks')->onDelete('CASCADE')->onUpgrade('CASCADE');

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
        Schema::dropIfExists('coworks_member');
    }
}
