<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\Player;
use App\Models\Team;
use App\Models\User;

class League extends Model
{
    use HasFactory;

    protected $fillable = ['nosaukums', 'about'];
    public function team()
    { // FKrelationship
    return $this->hasMany(Team::class);
    }
    public function country()
    { // FK relationship
    return $this->belongsTo(Country::class);
    }
}
