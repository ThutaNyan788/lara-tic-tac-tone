<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /** @use HasFactory<\Database\Factories\GameFactory> */
    use HasFactory;

    protected $guarded = [];

    public function playerOne()
    {
        return $this->belongsTo(User::class, 'player_one_id');
    }


    public function playerTwo()
    {
        return $this->belongsTo(User::class, 'player_one_id');
    }
}
