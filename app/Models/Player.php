<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['firstname',
    'infix',
    'surname',
    'jerseynumber',
    'position',
    'crest',
    'team_id'];
    
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function getRouteKeyName()
    {
        return 'player_id';
    }

    protected $primaryKey = 'player_id';
}
