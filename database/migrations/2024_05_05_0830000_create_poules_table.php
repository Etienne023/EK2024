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
    
        Schema::create('poules', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('crest');
            $table->foreignId('user_id')->constrained(); // change 'id' to 'user_id'
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pool');
    }
};
