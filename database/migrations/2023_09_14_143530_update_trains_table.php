<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    // 1. Modifico tab aggiungendo una colonna
    // 2. Modifico tab rimuovendo una colonna
    // 3. Modifico tab aggiornando una colonna
    
    public function up(): void
    {
        Schema::table('trains', function(Blueprint $table){    //SChema::table = aorire una tabella che gia esiste 
            if(Schema::hasColumn('trains','da_eliminare')){
                $table->dropColumn('da_eliminare');
            }
        });
    }

    /**
     * Reverse the migrations.
     */

    // 1. Modifico tab rimuimuovwndo l'aggiornamento al punto 3
    // 2. Modifico tabri-aggiungendo la colonna rimossa al punto 2 
    // 3. Modifico tab rimuovendo la colonna che ho aggiunto al punto 1 in up()

    public function down(): void
    {
        Schema::table('trains', function(Blueprint $table){
            $table->string('da_eliminare');
        });
    }
};
