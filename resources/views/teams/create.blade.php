@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Team Form</div>

                <div class="card-body">
                	<form method="post" action="/teams">
                		{{csrf_field()}}
                		Team name: <input type="text" name="name"><br><br>
                		<input type="submit" class="btn btn-default" value="submit">
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection