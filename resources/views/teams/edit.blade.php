@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Team</div>

                <div class="card-body">
                  <form method="post" action="/teams/{{$team->id}}">
                    {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        Team name: <input type="text" name="name" value="{{$team->name}}"><br><br>
                    <input type="submit" name="submit">
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection