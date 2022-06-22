<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\League;
use App\Models\Team;
use App\Models\PLayer;
use App\Models\User;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
    $players=Player::where('team_id','=',$id)->get();
    return view('players',['team_id'=>$id,'players'=>$players]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
    $team = Team::findOrFail($id);
    return view('player_new', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $player = new Player();
    $player->team_id = $request->team_id;
    $player->first_name = $request->first_name;
    $player->last_name = $request->last_name;
    $player->country = $request->country;
    $player->about = $request->about;
    $player->save();
    return redirect('league/country/team/players/' . $player->team_id);
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team_id = Player::findOrFail($id)->team_id;
        Player::findOrFail($id)->delete();
        return redirect('league/country/team/players/' . $team_id);
    }
}
