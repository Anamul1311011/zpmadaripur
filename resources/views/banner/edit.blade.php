@extends('layouts.dashboard')
@section('add-banner-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/banner') }}">
        Add Banner
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Banner</h1>
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

                    Edit Banner
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/banner') }}" method="post" enctype="multipart/form-data">
                      @csrf
            
                <div class="form-group">
                  <label>Banner Image</label>
                    <input type="hidden" name="banner_id" value="{{ $banner->id }}">
                  <input type="file" class="form-control" placeholder="Enter banner Image" name="banner_image" value="{{ $banner->banner_image }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Banners</button>
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
