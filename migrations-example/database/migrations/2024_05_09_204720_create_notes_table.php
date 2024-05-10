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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->string('title', length: 100)->nullable(false);
            $table->string('description',length: 250)->nullable(true);
            $table->date('deadline');
            $table->boolean('isDone')->default(false);
            $table->timestamps();

            // Mas tipos de datos, es muy util verlos en internet
            /*$table->unsignedInteger('years');
                $table->text('description');
                $table->decimal('amount', total: 8, places: 2);
                $table->float('example');
                $table->double('example');
                $table->enum('role', ['ADMIN','USER','SALES']);
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
