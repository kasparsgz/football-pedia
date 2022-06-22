<?php

namespace Database\Seeders;


use App\Models\Country;
use App\Models\League;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
/*    $country = Country::create([
    'name' => 'Germany',
    'code' => 'DE',
    'about' => 'Football in Germany is the nr.1 sport '
    ]);
    $country = Country::create([
    'name' => 'Finland',
    'code' => 'FI',
    'about' => 'In Finland they prefare Ice Hockey, but their star Teemu Puuki is pretty good '
    ]);
    $country = Country::where('name', 'Germany')->first();
    $country->league()->create(['nosaukums' => 'Bundesliga', 'about' => 'The pride of German football']);*/
    $league = League::where('nosaukums', 'Bundesliga')->first();
    $league->team()->create(['nosaukums' => 'Bayern Munich', 'about' => 'Best team in the League']);
    $team = Team::where('nosaukums', 'Bayern Munich')->first();
    $team->player()->create(['first_name' => 'Thomas','last_name' => 'Muller','country' => 'Germany','about' => 'Very annoying :)' ]);


    \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
