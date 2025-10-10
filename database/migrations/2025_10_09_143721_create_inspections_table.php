<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tel');
            $table->string('email');
            $table->string('nif');
            $table->string('TypesHotel');
            $table->string('typestar');
            $table->string('mainActivity');
            $table->string('numberRoom');
            $table->string('bedNumber');
            $table->string('tableNumber');
            $table->string('yearSelfinspection');
            $table->string('monthselfInspection');
            $table->string('workforce');
            $table->string('men');
            $table->string('women');
            $table->string('expatriateWork');
            $table->string('agreeInstallation');
            $table->string('description');
            $table->string('address');

            $table->string('origin')->nullable();
            $table->enum('inspectiontype', ['Singular', 'Colectivo' ,  'Nome Individual', 'Sociedade por Quotas',  'Sociedade por Quotas Pluripessoal',  'Sociedade por Quotas Unipessoal', 'Sociedade Anónima', 'Cooperativas'])->nullable();

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
        Schema::dropIfExists('inspections');
    }
}
