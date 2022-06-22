<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\Player;
use App\Models\League;
use App\Models\User;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['nosaukums', 'about'];
    public function player()
    { // FKrelationship
    return $this->hasMany(Player::class);
    }
    public function league()
    { // FK relationship
    return $this->belongsTo(League::class);
    }
}
