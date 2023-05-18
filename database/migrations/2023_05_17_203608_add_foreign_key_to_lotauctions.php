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
            $table->foreign('create_user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lotauctions', function (Blueprint $table) {
            $table->dropColumn('create_user_id');
            $table->dropForeign('lotauctions_create_user_id_foreign');
        });
    }
};
