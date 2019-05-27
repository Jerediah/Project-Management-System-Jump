@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Select project to create task</div>

                <div class="card-body">
                  <div class="list-group">
                        <hr>
                        @foreach($projects as $project)
                            <a href="/tasks/create/{{$project->id}}" class="list-group-item"> {{$project->title}} </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection