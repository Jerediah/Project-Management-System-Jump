<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\User;
use Illuminate\Support\Facades\Auth;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teams = Team::all();

        return view('teams.index', compact('teams'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Team::create($request->all());

        return redirect('/teams');
        // if (Auth::check()) {
        //     $team = Team::create([
        //         'name' => $request->input('name'),
        //         'user_id' => Auth::user()->id
        //     ]);

        //     if ($team) {
        //         return redirect()->route('teams.show', ['team' => $team->id])
        //         ->with('success', 'Team created successfully');
        //     }
        // }

        // return back()->withInput()->with('error','Error creating team');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
        // $team = Team::where('id', $team->id )->first();
        $team = Team::find($team->id);

        return view('teams.show', compact('team'));
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
        $team = Team::findOrFail($id);

        return view('teams.edit', compact('team'));
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
        $team = Team::findOrFail($id);

        $team->update($request->all());

        return redirect()->route('teams.show', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){  
        
        $team = Team::whereId($id)->delete();

        return redirect('/teams');
    }

    public function adduser(Request $request){

        $team = Team::findOrFail($request->id);

        $team->user()->save(new User(['email', $request->input('email')]));

        return redirect('/teams');
    }

}
