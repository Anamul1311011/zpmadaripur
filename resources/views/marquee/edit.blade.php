@extends('layouts.dashboard')
@section('add-marquee-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li><a href="{{ url('/add/marquee') }}">
        Add Marquee
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Marquee</h1>
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

                    Edit Marquee
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/marquee') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Text1</label>
                  <input type="hidden" name="marquee_id" value="{{ $marquee->id }}">
                  <input type="text" class="form-control" placeholder="Enter text1" name="text1" value="{{ $marquee->text1 }}">
                </div>
                <div class="form-group">
                  <label>Text2</label>
                  <input type="text" class="form-control" placeholder="Enter text2" name="text2" value="{{ $marquee->text2 }}">
                </div>
                <div class="form-group">
                  <label>Text3</label>
                  <input type="text" class="form-control" placeholder="Enter text3" name="text3" value="{{ $marquee->text3 }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Marquee</button>
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
