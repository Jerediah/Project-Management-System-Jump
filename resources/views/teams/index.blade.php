@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Teams</div>

                <div class="card-body">
                    <div class="card text-center"><a class="btn btn-default text-left" href="/teams/create">Create new Team</a></div>
                	<div class="list-group">
                        <hr>
                        @foreach($teams as $team)
                            <a href="/teams/{{$team->id}}" class="list-group-item"> {{$team->name}} </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection