<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('tel',20);
            $table->longText('email',30);
            $table->string('nif', 30);
            $table->longText('teamLeader',30);
            $table->string('description', 30);
            $table->string('photoEmployee')->nullable();
            $table->string('ministry');
            $table->string('departament');
            $table->string('address',255);
            $table->longText('occupation',255);
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
        Schema::dropIfExists('employees');
    }
}
