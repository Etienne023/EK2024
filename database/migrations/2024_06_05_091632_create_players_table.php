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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->renameColumn('id', 'player_id');
            $table->string('firstname');
            $table->string('infix')->nullable();
            $table->string('surname');
            $table->string('jerseynumber');
            $table->string('position');
            $table->string('crest');
            $table->foreignId('team_id')->constrained();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
