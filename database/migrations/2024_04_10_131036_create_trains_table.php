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
            $table->string('company');
            $table->string('departured');
            $table->string('arrival_station');
            $table->time('started_time');
            $table->time('arrival_time');
            $table->string('train_code')->unique();
            $table->integer('carriage_number');
            $table->boolean('on_time')->default(true);
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }
/* 
            $table->id();
            $table->string('azienda');
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno')->unique();
            $table->integer('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
            $table->timestamps();
*/
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
