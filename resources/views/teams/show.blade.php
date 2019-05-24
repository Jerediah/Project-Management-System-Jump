@extends('layouts.app')

@section('content')
<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
          </p>
          <div class="jumbotron">
            <h1> {{$team->name}} </h1>
          </div>
          <div class="row">
            @foreach($team->projects as $project)
            <div class="col-xs-6 col-lg-4">
              <h2>{{$project->title}}</h2>
              <p> {{$project->description}} </p>
              <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">View Project »</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            @endforeach
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
         <!--  <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
            <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/teams/{{$team->id}}/edit">Edit</a></li>
              <li>
              </form>
              <form method="post" action="/teams/{{$team->id}}">
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="DELETE">
                  <button>Delete</button>
                  </form></li>

              </li>
              <li><a href="#">Add new member</a></li>
            </ol>
          </div>
    <!--       <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
            </ol>
          </div> -->
        </div>

      <hr>


    </div>
@endsection