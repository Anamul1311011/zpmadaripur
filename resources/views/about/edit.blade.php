@extends('layouts.dashboard')
@section('add-about-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/about') }}">
        Add About
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit About</h1>
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

                    Edit About
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/about') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Heading</label>
                  <input type="hidden" name="about_id" value="{{ $about->id }}">
                  <input type="text" class="form-control" placeholder="Enter Heading" name="heading" value="{{ $about->heading }}">
                </div>
                <div class="form-group">
                  <label>Title1</label>
                  <input type="text" class="form-control" placeholder="Enter title1" name="title1" value="{{ $about->title1 }}">
                </div>
                <div class="form-group">
                  <label>Title2</label>
                  <input type="text" class="form-control" placeholder="Enter title2" name="title2" value="{{ $about->title2 }}">
                </div>
                <div class="form-group">
                  <label>Title3</label>
                  <input type="text" class="form-control" placeholder="Enter title3" name="title3" value="{{ $about->title3 }}">
                </div>
                <div class="form-group">
                  <label>Title4</label>
                  <input type="text" class="form-control" placeholder="Enter title4" name="title4" value="{{ $about->title4 }}">
                </div>
                <div class="form-group">
                  <label>Title5</label>
                  <input type="text" class="form-control" placeholder="Enter title5" name="title5" value="{{ $about->title5 }}">
                </div>
                <div class="form-group">
                  <label>Title6</label>
                  <input type="text" class="form-control" placeholder="Enter title6" name="title6" value="{{ $about->title6 }}">
                </div>
                <div class="form-group">
                  <label>Title7</label>
                  <input type="text" class="form-control" placeholder="Enter title7" name="title7" value="{{ $about->title7 }}">
                </div>

                <button type="submit" class="btn btn-primary">Update About</button>
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
