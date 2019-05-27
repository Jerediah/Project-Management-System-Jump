@extends('layouts.app')

@section('content')
<div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
          </p>
          <div class="jumbotron">
            <h1> {{$project->title}} </h1>
            <p> {{$project->description}} </p>
          </div>
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12" style="background: white;">

        
            <!-- Fluid width widget -->   
            <br>     
          <div class="card">
                    <h3 class="card-header">
                        <span class="glyphicon glyphicon-message"></span> 
                        Recent Comments
                    </h3>
                <div class="card-body">
                    <ul class="media-list">
                        @foreach($project->comments as $comment)
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <small>
                                        <a href="users/{{$comment->user->id}}"> - {{$comment->user->email}} </a>
                                        <br>
                                        commented on <a href="#">{{$comment->created_at->diffForHumans() }}</a>
                                    </small>
                                </h4>
                                <p>
                                    {{ $comment->body }}
                                </p>
                                <b>Proof:</b>
                                <p>
                                    {{ $comment->url }}
                                </p>
                            </div>
                        </li>
                        <hr>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- End fluid width widget --> 
          
              <form method="post" action="{{route('comments.store')}}">
                {{csrf_field()}}

                <input type="hidden" name="commentable_type" value="App\Project">
                <input type="hidden" name="commentable_id" value="{{$project->id}}">

                <div class="form-group">
                  <label for="comment-content">Comment</label>
                  <textarea placeholder="Enter comments" style="resize: vertical" id="comment-content" name="body" rows="3" spellcheck="false" class="form-control autosize-target text-left"> 
                  
                  </textarea>
                </div>

                <div class="form-group">
                  <label for="team-content">Proof of work done (URL/Photos)</label>
                  <textarea placeholder="Enter url or screenshots" style="resize: vertical" id="team-content" name="url" rows="2" spellcheck="false" class="form-control autosize-target text-left"> 
                  
                  </textarea>
                </div>

                <div class="form-group">
                  <input type="submit" class="btn btn-default" value="submit">
                </div>

              </form>
            </div>
          </div><!--/row-->
          <br>

        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
         <!--  <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
            <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/projects/{{$project->id}}/edit">Edit</a></li>
              <li><a href="/projects/create">Create new project</a></li>
              <li><a href="/projects">My projects</a></li>

              <br/>

              <li>
              </form>
              <form method="post" action="/projects/{{$project->id}}">
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" class="btn btn-default" value="Delete">
                  </form></li>

              </li>
            </ol>

          <!-- <hr>
          <h4>Add Members</h4>
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
            </ol>
 -->
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