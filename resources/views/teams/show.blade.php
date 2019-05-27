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
            <div class="col-xs-6 col-lg-4" style="background: white;">
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
              <li><a href="/projects/create/{{$team->id}}">Add Project</a></li>
              <li><a href="/teams/create">Create new Team</a></li>
              <li><a href="#">Add new member</a></li>

              <br/>

              <li>
              </form>
              <form method="post" action="/teams/{{$team->id}}">
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" class="btn btn-default" value="Delete">
                  </form></li>

              </li>
            </ol>

<!--   <hr> -->
       <!--    <h4>Add Members</h4>
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
              <form id="add-user" action="{{route('projects.adduser')}}" method="post"> 
                {{csrf_field()}}
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Email">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">Add</button>
                </span>
              </div>
            </form>
            </div>
          </div>

            <br>
             <h4>Team members</h4>
            <ol class="list-unstyled">
              @foreach($project->users as $user)
              <li><a href="#">{{$user->email}}</a></li>
              @endforeach
            </ol> -->

          </div>
    <!--       <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
            </ol>
          </div> -->
        </div>

                                                                                                                                                                                                                                                                                                                                                                                                        

    </div>
@endsection