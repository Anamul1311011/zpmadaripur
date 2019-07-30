@extends('layouts.dashboard')
@section('add-clink-page')
active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Committee Link</li>
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
            List Committee Link
          </div>

          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <th>Link</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </thead>
              @foreach ($clinks as $clink)
                <tr>
                  <td>{{ $clink->link }}</td>
                  <td>{{ $clink->title }}</td>
                  <td>{{ $clink->created_at }}</td>
                  <td>{{ $clink->updated_at ? $clink->updated_at:"Not Yet" }}</td>
                  <td>
                    <a class="btn btn-danger" href="{{ url('delete/clink') }}/{{ $clink->id }}"> <span style="color:white">Delete</span> </a>|
                    <a class="btn btn-info" href="{{ url('edit/clink') }}/{{ $clink->id }}"> <span style="color:white">Edit</span> </a>
                  </td>
                </tr>
              @endforeach
            </table>
            {{ $clinks->links() }}

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
              Add Committee Link
            </div>

            <div class="panel-body">

              <form action="{{ url('/insert/clink') }}" method="post">
                @csrf
          <div class="form-group">
            <label>Link</label>
            <input type="text" class="form-control" placeholder="Enter link" name="link" value="{{ old('link') }}">
          </div>
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{ old('title') }}">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>


@endsection
