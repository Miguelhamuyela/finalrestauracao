<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->string('tel');
            $table->string('email');
            $table->string('nif');
            $table->string('classification');
          //  $table->string('representative');
          //  $table->string('TypesHotel');
          //  $table->string('address');
            $table->string('origin')->nullable();
            $table->enum('clienttype', ['Singular', 'Colectivo' ,  'Nome Individual', 'Sociedade por Quotas',  'Sociedade por Quotas Pluripessoal',  'Sociedade por Quotas Unipessoal', 'Sociedade Anónima', 'Cooperativas'])->nullable();

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
        Schema::dropIfExists('clients');
    }
}
