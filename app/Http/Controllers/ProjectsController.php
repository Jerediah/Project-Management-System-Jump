<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\ProjectUser;
use App\Team;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($team_id = null)
    {
        //
        $teams = Team::all();

        return view('projects.create', ['project_id'=>$team_id], compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Project::create($request->all());

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        // $team = Team::where('id', $team->id )->first();
        $project = Project::find($project->id);

        return view('projects.show', compact('project'));
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
        $teams = Team::all();
        $project = Project::findOrFail($id);

        return view('projects.edit', compact('project', 'teams'));
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
        $project = Project::findOrFail($id);

        $team = Team::findOrFail($id);

        $project->update($request->all());

        $team->update($request->all());

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $project = Project::whereId($id)->delete();

        return redirect('/projects');
    }

    public function adduser(Request $request){
         //add user to projects 

         //take a project, add a user to it
         $project = Project::find($request->input('id'));

        

         if(Auth::user()->id == $project->id){

         $user = User::where('email', $request->input('email'))->first(); //single record

         //check if user is already added to the project
         // $projectUser = ProjectUser::where('user_id',$user->id)
         //                            ->where('project_id',$project->id)
         //                            ->first();
                                    
         //    if($projectUser){
         //        //if user already exists, exit 
        
         //        return response()->json(['success' ,  $request->input('email').' is already a member of this project']); 
               
         //    }


            if($user && $project){

                $project->users()->attach($user->id); 

                     return response()->json(['success' ,  $request->input('email').' was added to the project successfully']); 
                        
                    }
                    
         }

         return redirect()->route('projects.show', ['project'=> $project->id])
         ->with('errors' ,  'Error adding user to project');
        

         
     }
}
