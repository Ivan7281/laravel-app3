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
        Schema::create('lotauctions', function (Blueprint $table) {
            $table->id();
            $table->string('name_lot', 50);
            $table->date('start_date');
            $table->date('end_date');
            $table->float('starting_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lotauctions');
    }
};
