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
      <li class="active">Add News Detail</li>
    </ol>
  </div><!--/.row-->
  <div class="panel panel-container">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-success">
          <div class="panel-heading">
            @if(session('successdelete'))
                            <div class="alert alert-info">
                                {{ session('successdelete') }}
                            </div>
                            @endif
            List News Detail
          </div>

          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <th>News Title</th>
                <th>News Detail</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </thead>
              @foreach ($newses as $news)
                <tr>
                  <td>{{ $news->title }}</td>
                  <td>{{ $news->detail }}</td>
                  <td>{{ $news->created_at }}</td>
                  <td>{{ $news->updated_at ? $news->updated_at:"Not Yet" }}</td>
                  <td>
                    <a class="btn btn-danger" href="{{ url('delete/news') }}/{{ $news->id }}"> <span style="color:white">Delete</span> </a>|
                    <a class="btn btn-info" href="{{ url('edit/news') }}/{{ $news->id }}"> <span style="color:white">Edit</span> </a>
                  </td>
                </tr>
              @endforeach
            </table>

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-info">
            <div class="panel-heading">
              @if (session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
              @endif
              Add News Detail
            </div>

            <div class="panel-body">

              <form action="{{ url('/insert/news') }}" method="post">
                @csrf
          <div class="form-group">
            <label>News Title</label>
            <input type="text" class="form-control" placeholder="Enter News Title" name="title" value="{{ old('title') }}">
          </div>
          <div class="form-group">
            <label>News Detail</label>
            <input type="text" class="form-control" placeholder="Enter News Detail" name="detail" value="{{ old('detail') }}">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>


@endsection
