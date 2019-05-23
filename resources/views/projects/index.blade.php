@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Project list</div>

                <div class="card-body">
   					<table class="table">
   						<thead>
   							<tr>
   								<th>Title</th>
   								<th>Description</th>
   								<th>Priority</th>
   								<th>Team</th>
   								<th>Start Date</th>
   								<th>Finish Date</th>
   							</tr>
   						</thead>
   						<tbody>
   							@if($projects)
   								@foreach($projects as $project)
		   							<tr>
		   								<td>{{$project->title}}</td>
		   								<td>{{$project->description}}</td>
		   								<td>{{$project->priority}}</td>
		   								<td>{{$project->team->name}}</td>
		   								<td>{{$project->start_date}}</td>
		   								<td>{{$project->finish_date}}</td>
										<td><a href="{{route('projects.edit', $project->id)}}">Edit</a></td>
										<td><form method="post" action="/projects/{{$project->id}}">
		                    			{{csrf_field()}}
		                    			<input type="hidden" name="_method" value="DELETE">
		                    			<button>Delete</button>
	                    				</form></td>
		   							</tr>
	   							@endforeach
	   						@endif
   						</tbody>
   					</table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection