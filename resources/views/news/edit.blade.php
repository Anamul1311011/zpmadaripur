@extends('layouts.dashboard')
@section('add-news-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Edit News Detail</li>
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
                    Edit News Detail
                  </div>

                  <div class="panel-body">

                    <form action="{{ url('/update/news') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>News Title</label>
                  <input type="hidden" name="news_id" value="{{ $news->id }}">
                  <input type="text" class="form-control" placeholder="Enter News Title" name="title" value="{{ $news->title }}">
                </div>
                <div class="form-group">
                  <label>News Detail</label>
                  <input type="text" class="form-control" placeholder="Enter News Detail" name="detail" value="{{ $news->detail }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
              </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
