<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_item extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'user_id', 'category_id'];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_news_item', 'news_item_id', 'tag_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    protected $primaryKey = 'news_item_id';
}
