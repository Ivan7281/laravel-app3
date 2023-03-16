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
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->string('name_customer');
            $table->float('rate_price');

            $table->bigInteger('rate_id')
                ->unsigned()
                ->nullable(false);

            $table->timestamps();

            $table->foreign('rate_id')
                ->references ('id')
                ->on('lotauctions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rates');
    }
};
