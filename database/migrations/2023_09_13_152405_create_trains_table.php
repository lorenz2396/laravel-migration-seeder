<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            //Azienda
            $table->string('company', 64);
            //Stazione di partenza
            $table->string('dep_station', 64);
            //Stazione di arrivo 
            $table->string('arr_station', 64);
            //Orario di partenza
            // $table->timestamp('dep_timestamp');
            // $table->time('dep_time');
            // $table->date('date_time');
            $table->dateTime('dep_datetime');
            //Orario di arrivo
            $table->dateTime('arr_datetime');
            //Codice treno
            $table->string('train_code',10)->unique();
            //Numero carrozze
            $table->unsignedTinyInteger('train_car_number');
            //In orario
            $table->boolean('on_time')->default(true);
            //Cancellato
            $table->boolean('delated')->default(false);

            //Colonna da eliminare
            $table->string('da_eliminare')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
