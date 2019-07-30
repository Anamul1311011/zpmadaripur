@extends('layouts.dashboard')
@section('add-chief-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/chief') }}">
        Add Chief
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Chief</h1>
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

                    Edit Chief
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/chief') }}" method="post" enctype="multipart/form-data">
                      @csrf
                  <div class="form-group">
                        <label>Chief heading</label>
                        <input type="hidden" name="chief_id" value="{{ $chief->id }}">
                        <input type="text" class="form-control" placeholder="Enter heading" name="heading" value="{{ $chief->heading }}">
                  </div>
                  <div class="form-group">
                        <label>Chief name</label>
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{ $chief->name }}">
                  </div>
                  <div class="form-group">
                        <label>Chief zilla</label>
                        <input type="text" class="form-control" placeholder="Enter zilla" name="zilla" value="{{ $chief->zilla }}">
                  </div>
                  <div class="form-group">
                        <label>Chief phone</label>
                        <input type="text" class="form-control" placeholder="Enter phone" name="phone" value="{{ $chief->phone }}">
                  </div>
                  <div class="form-group">
                        <label>Chief mobile</label>
                        <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" value="{{ $chief->mobile }}">
                  </div>
                <div class="form-group">
                  <label>Chief Image</label>
                  <input type="file" class="form-control" placeholder="Enter chief Image" name="image" value="{{ $chief->image }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Chiefs</button>
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
