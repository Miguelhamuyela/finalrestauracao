<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->double('value')->nullable();
            $table->string('origin')->nullable();
            $table->string('reference')->nullable();
            $table->string('code')->nullable();
            $table->string('currency', 10)->nullable();
            $table->enum('status', ['Pago', 'Não Pago', 'Em Validação', 'Negado'])->nullable();

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
        Schema::dropIfExists('payments');
    }
}
