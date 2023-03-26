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
        Schema::table('lotauctions', function (Blueprint $table) {
            $table->unsignedBigInteger('rate_id');
            $table->foreign('rate_id')->on('rates'
            )->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lotauctions', function (Blueprint $table) {
            $table->dropColumn('rate_id');
            $table->dropForeign('lotauctions_rate_id_foreign');
        });
    }
};
