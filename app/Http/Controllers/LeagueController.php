<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\League;
use App\Models\Player;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $leagues=League::where('country_id','=',$id)->get();
        return view('leagues',['country_id'=>$id,'leagues'=>$leagues]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        if(!Auth::check()) return "Not allowed! Go home!";
        $country = Country::findOrFail($id);
        return view('league_new', compact('country'));
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

        $league = new League();
        $league->country_id = $request->country_id;
        $league->nosaukums = $request->nosaukums;
        $league->about = $request->about;
        $league->save();
        return redirect('league/country/' . $league->country_id);
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
        $leagues = League::find($id);
        return view('leagues_update', compact('leagues'));}
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


        $league = League::find($id);
        $league->nosaukums=$request->get('nosaukums');
        $league->about=$request->get('about');
        $league->save();
        return redirect('league/country/'.$league->country_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $country_id = League::findOrFail($id)->country_id;
    League::findOrFail($id)->delete();
    return redirect('league/country/' . $country_id);
    }
}
