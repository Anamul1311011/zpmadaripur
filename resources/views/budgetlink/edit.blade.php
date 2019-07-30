@extends('layouts.dashboard')
@section('add-budgetlink-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Edit Budget Link</li>
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
                    Edit Budget Link
                  </div>

                  <div class="panel-body">

                    <form action="{{ url('/update/budgetlink') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Link</label>
                  <input type="hidden" name="budgetlink_id" value="{{ $budgetlink->id }}">
                  <input type="text" class="form-control" placeholder="Enter link" name="link" value="{{ $budgetlink->link }}">
                </div>
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{ $budgetlink->title }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
