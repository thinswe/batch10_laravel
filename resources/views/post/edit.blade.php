@extends('template')

@section('content')

<div class="container mt-5">
    
     <div class="row">
     	<div class="col-md-8">
        <h4 class="text-center">Post Edit Form</h4>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" value="{{$post->title}}">
          </div>
          <div class="form-group">
            <label>Content:</label>
            <textarea name="content" class="form-control">{{$post->body}}</textarea> 
          </div>
          <div class="form-group">
          	<label>Photo</label><span class="text-danger">[ supported file types: jpeg,png,jpg ]</span>
          	<input type="file" name="photo" class="form-control">
            <img width="100" height="100" src="{{$post->image}}">
            <input type="hidden" name="oldphoto" value="{{$post->image}}">
          </div>
          <div class="form-group">
            <label>Categories</label>
            <select name="category" class="form-control">
              <option value="">Choose Category</option>
              <!-- {-- accept data and loop --} -->
              @foreach($categories as $row)
              <option value="{{$row->id}}" @if($row->id==$post->category_id){{'selected'}} @endif>{{$row->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="btnsubmit" class="btn btn-primary" value="Update">
          </div>
        </form>
        </div>
        <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>
        
      
 	</div>   
  </div>

@endsection