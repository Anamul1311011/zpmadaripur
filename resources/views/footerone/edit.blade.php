@extends('layouts.dashboard')
@section('add-footerone-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/footerone') }}">
        Add Footerone
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Footerone</h1>
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

                    Edit Footerone
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/footerone') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Link</label>
                  <input type="hidden" name="footerone_id" value="{{ $footerone->id }}">
                  <input type="text" class="form-control" placeholder="Enter link" name="link" value="{{ $footerone->link }}">
                </div>
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" placeholder="Enter title" name="title" value="{{ $footerone->title }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Footerone</button>
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
