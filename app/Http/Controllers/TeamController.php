<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Player;
use App\Models\League;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_league)
    {
        $teams=Team::where('league_id','=',$id_league)->get();
        return view('teams',['league_id'=>$id_league,'teams'=>$teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        if(!Auth::check()) return  "Not allowed! Go home!";
     $league = League::findOrFail($id);
     return view('team_new', compact('league'));
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::check()) return "Not allowed! Go home!";
        $rules = array(
            'nosaukums' => 'required|min:2|max:191',
            );
            $this->validate($request, $rules);

        $team = new Team();
        $team->league_id = $request->league_id;
        $team->nosaukums = $request->nosaukums;
        $team->about = $request->about;
        $team->save();
        return redirect('league/country/team/' . $team->league_id);
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
        if(Auth::check()){
        $teams = Team::find($id);
        return view('teams_update', compact('teams'));}
        else{
            return "Not allowed here!";
        }
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
        if(!Auth::check()) return "Not allowed! Go home!";
        $rules = array(
            'nosaukums' => 'required|min:2|max:191',
            );
            $this->validate($request, $rules);


        $team = Team::find($id);
        $team->nosaukums=$request->get('nosaukums');
        $team->about=$request->get('about');
        $team->save();
        return redirect('league/country/team/'.$team->league_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $league_id = Team::findOrFail($id)->league_id;
        Team::findOrFail($id)->delete();
        return redirect('league/country/team/' . $league_id);
 }
}
