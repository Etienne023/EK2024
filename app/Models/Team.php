<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tla',
        'crest',
        'website',
        'pool_id',
    ];

    public function pool()
    {
        return $this->belongsTo(Poule::class, 'pool_id');
    }
}
