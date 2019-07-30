@extends('layouts.dashboard')
@section('add-eseba-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/eseba') }}">
        Add Eseba
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Eseba</h1>
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

                    Edit Eseba
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/eseba') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Heading</label>
                  <input type="hidden" name="eseba_id" value="{{ $eseba->id }}">
                  <input type="text" class="form-control" placeholder="Enter Heading" name="heading" value="{{ $eseba->heading }}">
                </div>
                <div class="form-group">
                  <label>Title1</label>
                  <input type="text" class="form-control" placeholder="Enter title1" name="title" value="{{ $eseba->title1 }}">
                </div>
                <div class="form-group">
                  <label>Title2</label>
                  <input type="text" class="form-control" placeholder="Enter title2" name="title2" value="{{ $eseba->title2 }}">
                </div>
                <div class="form-group">
                  <label>Title3</label>
                  <input type="text" class="form-control" placeholder="Enter title3" name="title3" value="{{ $eseba->title3 }}">
                </div>
                <div class="form-group">
                  <label>Title4</label>
                  <input type="text" class="form-control" placeholder="Enter title4" name="title4" value="{{ $eseba->title4 }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Eseba</button>
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
