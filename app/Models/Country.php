<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\League;
use App\Models\Player;
use App\Models\Team;
use App\Models\User;

class Country extends Model
{
    use HasFactory;
 protected $fillable = ['name', 'code', 'about'];
 public function league()
 { // FKrelationship
 return $this->hasMany(League::class);
 }
}
