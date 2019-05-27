@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">To Do</div>

                <div class="card-body">
                	<div class="list-group">
                  	<form method="post" action="/tasks/create">
                  		{{csrf_field()}}
                  		<div class="input-group flex-nowrap">
  						<div class="input-group-prepend">
    						<span class="input-group-text" id="addon-wrapping">Add task</span>
 						</div>
  						<input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping">
					</div>
                  	</form>
                  	
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection