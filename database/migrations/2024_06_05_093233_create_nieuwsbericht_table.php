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
        Schema::create('nieuwsbericht', function (Blueprint $table) {
            $table->id();
            $table->renameColumn('id', 'nieuwsbericht_id' );
            $table->string('title');
            $table->string('description');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->foreignId('tag_id')->constrained('tag', 'tag_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nieuwsbericht');
    }
};
