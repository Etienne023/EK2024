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
        Schema::create('tag_news_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_id')->constrained('tags', 'tag_id'); // change 'id' to 'tag_id'
            $table->foreignId('news_item_id')->constrained('news_items', 'news_item_id');
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
