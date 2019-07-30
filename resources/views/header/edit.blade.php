@extends('layouts.dashboard')

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Edit Header</li>
    </ol>
  </div><!--/.row-->
  <div class="container" style="margin-top:30px">
      <div class="row justify-content-center">

          <div class="col-md-6">
              <div class="panel panel-success">
                  <div class="panel-heading">
                    @if (session('success'))
                      <div class="alert alert-success">
                        {{ session('success') }}
                      </div>
                    @endif
                    Edit Header
                  </div>

                  <div class="panel-body">

                    <form action="{{ url('/update/header') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>heading</label>
                  <input type="hidden" name="header_id" value="{{ $header->id }}">
                  <input type="text" class="form-control" placeholder="Enter heading" name="heading" value="{{ $header->heading }}">
                </div>
                <div class="form-group">
                  <label>Date</label>
                  <input type="date" class="form-control" placeholder="Enter date" name="date" value="{{ $header->date }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
