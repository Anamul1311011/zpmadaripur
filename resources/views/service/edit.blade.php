@extends('layouts.dashboard')
@section('add-service-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/service') }}">
        Add Service
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Service</h1>
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

                    Edit Service
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/service') }}" method="post" enctype="multipart/form-data">
                      @csrf

                <div class="form-group">
                  <label>Service Heading</label>
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                  <input type="text" class="form-control" placeholder="Enter Service heading" name="heading" value="{{ $service->heading }}">
                </div>
                <div class="form-group">
                  <label>Service Detail1</label>
                  <input type="text" class="form-control" placeholder="Enter Service Detail1" name="detail1" value="{{ $service->detail1 }}">
                </div>
                <div class="form-group">
                  <label>Service Detail2</label>
                  <input type="text" class="form-control" placeholder="Enter Service Detail2" name="detail2" value="{{ $service->detail2 }}">
                </div>
                <div class="form-group">
                  <label>Service Detail3</label>
                  <input type="text" class="form-control" placeholder="Enter Service Detail3" name="detail3" value="{{ $service->detail3 }}">
                </div>
                <div class="form-group">
                  <label>Service title1</label>
                  <input type="text" class="form-control" placeholder="Enter Service title1" name="title1" value="{{ $service->title1 }}">
                </div>
                <div class="form-group">
                  <label>Service title2</label>
                  <input type="text" class="form-control" placeholder="Enter Service title2" name="title2" value="{{ $service->title2 }}">
                </div>
                <div class="form-group">
                  <label>Service title3</label>
                  <input type="text" class="form-control" placeholder="Enter Service title3" name="title3" value="{{ $service->title3 }}">
                </div>
                <div class="form-group">
                  <label>Service Image</label>
                  <input type="file" class="form-control" placeholder="Enter Service Image" name="image" value="{{ $service->image }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Images</button>
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
