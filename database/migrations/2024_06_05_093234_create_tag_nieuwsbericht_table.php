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
        Schema::create('tag_nieuwsbericht', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_id')->constrained('tag', 'tag_id'); // change 'id' to 'tag_id'
            $table->foreignId('nieuwsbericht_id')->constrained('nieuwsbericht', 'nieuwsbericht_id');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_nieuwsbericht');
    }
};
