<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {

            //Azienda
            $table->string('company');
            //Codice Treno
            $table->string('code');
            //Stazione di partenza
            $table->string('departure_station');
            //Stazione di arrivo
            $table->string('arrival_station');
            //data partenza ----
            $table->dateTime('departure_date');
            //data arrivo -------
            $table->dateTime('arrival_date');
            //ritardo------- per conoscere se è in ritardo o meno, occorrerebbe una tabella ponte di ogni tappa_stazione, orario_previsto e orario_reale??
            /*  $table->time('delay'); */
            //In orario
            $table->boolean('in_time')->default(true);
            //cancellato
            $table->boolean('deleted')->nullable()->default(false);
            //Numero Carrozze
            $table->tinyInteger('carriages');
            //posti totali -------------
            $table->mediumInteger('total_seats');
            //posti prenotati ---------------------------tabella ponte utenti-posti prenotati?
            /*  $table->mediumInteger("reserved_seats");
            //posti disponibili
            $table->mediumInteger("availagle_seats"); */

            //price
            $table->decimal('price', 5, 2);
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            //
        });
    }
};