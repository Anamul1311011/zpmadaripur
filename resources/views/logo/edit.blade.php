@extends('layouts.dashboard')
@section('add-logo-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/logo') }}">
        Add Logo
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Logos</h1>
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

                    Edit Logos
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/logo') }}" method="post" enctype="multipart/form-data">
                      @csrf
                <div class="form-group">
                  <label>Logo Title</label>
                  <input type="hidden" name="logo_id" value="{{ $logo->id }}">
                  <input type="text" class="form-control" placeholder="Enter logo title" name="title" value="{{ $logo->title }}">
                </div>


                <div class="form-group">
                  <label>Logo Image</label>
                  <input type="file" class="form-control" placeholder="Enter logo Image" name="logo_image" value="{{ $logo->logo_image }}">
                </div>
                <button type="submit" class="btn btn-primary">Update logos</button>
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
