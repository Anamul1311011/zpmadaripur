@extends('layouts.dashboard')
@section('add-plink-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Edit Project Link</li>
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
                    Edit Project Link
                  </div>

                  <div class="panel-body">

                    <form action="{{ url('/update/plink') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Link</label>
                  <input type="hidden" name="plink_id" value="{{ $plink->id }}">
                  <input type="text" class="form-control" placeholder="Enter link" name="link" value="{{ $plink->link }}">
                </div>
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{ $plink->title }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
