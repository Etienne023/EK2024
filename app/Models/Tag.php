<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['Title', 'Description'];

    public function news_items()
    {
        return $this->belongsToMany(News_item::class);
    }

    protected $primaryKey = 'tag_id';
}
