@extends('layouts.dashboard')
@section('add-footerbottom-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/footerbottom') }}">
        Add Logo
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Footerbottom</h1>
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

                    Edit Footerbottom
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/footerbottom') }}" method="post" enctype="multipart/form-data">
                      @csrf
                <div class="form-group">
                  <label>Footer Title</label>
                  <input type="hidden" name="footerbottom_id" value="{{ $footerbottom->id }}">
                  <input type="text" class="form-control" placeholder="Enter footer title" name="title" value="{{ $footerbottom->title }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Footerbottom</button>
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
