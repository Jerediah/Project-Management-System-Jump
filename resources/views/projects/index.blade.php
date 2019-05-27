@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Projects</div>

                <div class="card-body">
                    <div class="card text-center"><a class="btn btn-default text-left" href="/projects/create">Create new project</a></div>
                  <div class="list-group">
                        <hr>
                        @foreach($projects as $project)
                            <a href="/projects/{{$project->id}}" class="list-group-item"> {{$project->title}} </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection