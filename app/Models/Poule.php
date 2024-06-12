<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poule extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'crest', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class, 'pool_id');
    }

    
}
