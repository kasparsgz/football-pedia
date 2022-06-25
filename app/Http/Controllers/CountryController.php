<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\League;
use App\Models\Player;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CountryController extends Controller
{

    //public function __construct(){
    ///        $this->middleware('auth');
    //}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('countries', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //if(!Auth::check()) return "Not allowed! Go home!";
       // $this->authorize("create", Country::class);
        //return view("artist_add");
        $Countries = Country::all();
        return view('country_new');

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
            'name' => 'required|min:2|max:100',
            'code' => 'required|min:1|max:3',
            );
            $this->validate($request, $rules);
        $country = new Country();
        $country->id=$request->id;
        $country->name=$request->name;
        $country->code=$request->code;
        $country->about=$request->about;
        $country->save();
       return redirect('/country');
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
        $this->authorize("edit", Country::class);
        if(Auth::check()){
        $countries = Country::find($id);
        return view('countries_update', compact('countries'));}
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
        $this->authorize("update", Country::class);
        $rules = array(
            'name' => 'required|min:2|max:100',
            'code' => 'required|min:1|max:3',
            );
            $this->validate($request, $rules);


        $country = Country::find($id);
        $country->name=$request->get('name');
        $country->code=$request->get('code');
        $country->about=$request->get('about');
        $country->save();
        return redirect('country/'.$country->country_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $this->authorize("delete", Country::class);
    League::where('country_id',$id)->delete();
    Country::findOrFail($id)->delete();
    return redirect('country/'); }
}
