@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Project</div>

                <div class="card-body">
                	<form method="post" action="/projects/{{$project->id}}">
                		{{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        Project name: <input type="text" name="title" value="{{$project->title}}"><br><br>
                        Project description: <input type="text" name="description" value="{{$project->description}}"><br><br>
                        Select Team: <select id="team_id" name="team_id" class="form-control">
                            <option>-----Select Team-----</option>
                            @foreach($teams as $team)
                                <option value="{{$team->id}}">{{$team->name}}</option>
                            @endforeach
                        </select>
                        Priority: <input type="text" name="priority" value="{{$project->priority}}"><br><br>
                        Start date: <input type="date" name="start_date" value="{{$project->start_date}}"><br><br>
                        Finish date: <input type="date" name="finish_date" value="{{$project->finish_date}}"><br><br>
                		<input type="submit" class="btn btn-default" value="submit">
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection