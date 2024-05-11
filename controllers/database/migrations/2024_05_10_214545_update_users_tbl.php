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
        Schema::table('users', function(Blueprint $table) {
            $table->unsignedInteger('age')->nullable(false);
            $table->string('address', length: 250)->nullable(true);
            $table->unsignedBigInteger('zipCode')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumn(['age']);
        Schema::dropColumn(['address']);
        Schema::dropColumn(['zipCode']);
    }
};
