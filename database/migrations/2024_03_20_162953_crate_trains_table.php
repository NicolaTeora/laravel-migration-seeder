<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            /**
             *  Colonne e tipo di dati che saranno inseriti nella tabella
             * 
             */
            $table->id();

            $table->string('agency', 50); //azienda
            $table->text('departure_station'); //Stazione di partenza
            $table->text('arrival_station'); //Stazione di arrivo
            $table->time('departure_time'); //Orario di partenza
            $table->time('arrival_time'); //Orario di arrivo
            $table->string('code_train', 25); //Codice Treno
            $table->smallInteger('num_carriages'); //Numero Carrozze
            $table->boolean('in_time')->nullable();   //In orario
            $table->boolean('deleted')->nullable();    //Cancellato

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
        Schema::dropIfExists('trains');
    }
};
