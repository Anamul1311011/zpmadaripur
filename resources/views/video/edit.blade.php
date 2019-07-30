@extends('layouts.dashboard')
@section('add-video-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/video') }}">
        Add Video
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Video</h1>
    </div>
  </div><!--/.row-->
  <div class="container">
      <div class="row justify-content-center">

          <div class="col-md-6">
              <div class="panel panel-success">
                  <div class="panel-heading">
                    @if (session('success'))
                      <div class="alert alert-success">
                        {{ session('success') }}
                      </div>
                    @endif

                    Edit Video
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/video') }}" method="post" enctype="multipart/form-data">
                      @csrf


                <div class="form-group">
                  <label>Video Link</label>
                  <input type="hidden" name="video_id" value="{{ $video->id }}">
                  <input type="text" class="form-control" placeholder="Enter Video link" name="link" value="{{ $video->link }}">
                </div>

                <div class="form-group">
                  <label>Video title</label>
                  <input type="text" class="form-control" placeholder="Enter Video title" name="title" value="{{ $video->title }}">
                </div>

                <div class="form-group">
                  <label>Video Image</label>
                  <input type="file" class="form-control" placeholder="Enter Video Image" name="image" value="{{ $video->image }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Videos</button>
              </form>
              <br>
          @if ($errors->all())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $value)
                <li>{{ $value }}</li>
              @endforeach
            </div>
          @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
