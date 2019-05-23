@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Project</div>

                <div class="card-body">
                	<form method="post" action="/projects">
                		{{csrf_field()}}
                		Project name: <input type="text" name="title"><br><br>
                		Project description: <input type="text" name="description"><br><br>
                		Select Team: <select id="team_id" name="team_id" class="form-control">
                			<option>-----Select Team-----</option>
                			@foreach($teams as $team)
                				<option value="{{$team->id}}">{{$team->name}}</option>
                			@endforeach
                		</select>
                		Priority: <input type="text" name="priority"><br><br>
                		Start date: <input type="date" name="start_date"><br><br>
                		Finish date: <input type="date" name="finish_date"><br><br>
                		<button>Submit</button>
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection