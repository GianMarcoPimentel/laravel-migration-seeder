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
            $table->string('company',200);
            $table->string('departured',100);
            $table->string('arrival_station');
            $table->time('started_time');
            $table->time('arrival_time');
            $table->string('train_code',50)->unique();
            $table->integer('carriage_number');
            $table->boolean('on_time')->default(true);
            $table->boolean('deleted')->default(false);
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
