@extends('template')

@section('content')

<div class="container mt-5">
    
     <div class="row">
     	<div class="col-md-8">
        <h4 class="text-center">Post Create Form</h4>

        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
             @enderror
          </div>
          <div class="form-group">
            <label>Content:</label>
            <textarea name="content" class="form-control @error('align-content-between') is-invalid @enderror"></textarea> 
            @error('content')
                <div class="text-danger">{{ $message }}</div>
             @enderror
          </div>
          <div class="form-group">
          	<label>Photo</label><span class="text-danger">[ supported file types: jpeg,png,jpg ]</span>
          	<input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror">
            @error('photo')
                <div class="text-danger">{{ $message }}</div>
             @enderror
          </div>
          <div class="form-group">
            <label>Categories</label>
            <select name="category" class="form-control @error('category') is-invalid @enderror">
              <option value="">Choose Category</option>
              {-- accept data and loop --}
              @foreach($categories as $row)
              <option value="{{$row->id}}">{{$row->name}}</option>
              @endforeach
            </select>
            @error('category')
                <div class="text-danger">{{ $message }}</div>
             @enderror
          </div>
          <div class="form-group">
            <input type="submit" name="btnsubmit" class="btn btn-primary" value="Save">
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