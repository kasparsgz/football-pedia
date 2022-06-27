<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country;
use App\Models\League;
use App\Models\Team;
use App\Models\User;

class Player extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'country', 'about'];
    public function team()
    { // FK relationship
    return $this->belongsTo(Team::class);
    }
}
