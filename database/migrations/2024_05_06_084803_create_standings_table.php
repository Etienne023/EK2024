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
        Schema::create('standings', function (Blueprint $table) {
            $table->id();
            $table->string("group");
            $table->integer('position');
            $table->foreignId('team_id')->constrained();
            $table->integer('PlayedGames');
            $table->integer('Won');
            $table->integer('Draw');
            $table->integer('Lost');
            $table->integer('Points');
            $table->integer('GoalsFor');
            $table->integer('GoalsAgainst');
            $table->integer('GoalDifference');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('standings');
    }
};
