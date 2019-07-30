@extends('layouts.dashboard')
@section('add-noticedetail-page')
active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Notice Detail</li>
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
            List Notice Detail
          </div>

          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <th>Notice Title</th>
                <th>Notice Detail</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </thead>
              @foreach ($noticedetails as $noticedetail)
                <tr>
                  <td>{{ $noticedetail->notice_title }}</td>
                  <td>{{ $noticedetail->notice_detail }}</td>
                  <td> <img width="100" src="{{ asset($noticedetail->featured_image) }}" alt=""> </td>
                  <td>{{ $noticedetail->created_at }}</td>
                  <td>{{ $noticedetail->updated_at ? $noticedetail->updated_at:"Not Yet" }}</td>
                  <td>
                    <a class="btn btn-danger" href="{{ url('delete/noticedetail') }}/{{ $noticedetail->id }}"> <span style="color:white">Delete</span> </a>|
                    <a class="btn btn-info" href="{{ url('edit/noticedetail') }}/{{ $noticedetail->id }}"> <span style="color:white">Edit</span> </a>
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
              Add Notice Detail
            </div>

            <div class="panel-body">

              <form action="{{ url('/insert/noticedetail') }}" method="post">
                @csrf
          <div class="form-group">
            <label>Notice Title</label>
            <input type="text" class="form-control" placeholder="Enter Notice Title" name="notice_title" value="{{ old('notice_title') }}">
          </div>
          <div class="form-group">
            <label>Notice Detail</label>
            <input type="text" class="form-control" placeholder="Enter Notice Detail" name="notice_detail" value="{{ old('notice_detail') }}">
          </div>

          <div class="form-group">
            <label>Featured image</label>
            <input type="file" class="form-control" placeholder="Enter Notice Detail" name="featured_image" value="{{ old('featured_image') }}">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>


@endsection
