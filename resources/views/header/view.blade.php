@extends('layouts.dashboard')
@section('add-header-page')
active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Header</li>
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
            List Header
          </div>

          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <th>Heading</th>
                <th>Date</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </thead>
              @foreach ($headers as $header)
                <tr>
                  <td>{{ $header->heading }}</td>
                  <td>{{ Carbon\Carbon::now()->format('l jS \\of F Y') }}</td>
                  {{-- <td>{{ Carbon\Carbon::now()->format('l jS F Y b h:i:s') }}</td> --}}
                  <td>{{ $header->created_at }}</td>
                  <td>{{ $header->updated_at ? $header->updated_at:"Not Yet" }}</td>
                  <td>
                    <a class="btn btn-danger" href="{{ url('delete/header') }}/{{ $header->id }}"> <span style="color:white">Delete</span> </a>|
                    <a class="btn btn-info" href="{{ url('edit/header') }}/{{ $header->id }}"> <span style="color:white">Edit</span> </a>
                  </td>
                </tr>
              @endforeach
            </table>
            {{ $headers->links() }}

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
              Add Header
            </div>

            <div class="panel-body">

              <form action="{{ url('/insert/header') }}" method="post">
                @csrf
          <div class="form-group">
            <label>heading</label>
            <input type="text" class="form-control" placeholder="Enter heading" name="heading" value="{{ old('heading') }}">
          </div>
          <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" placeholder="Enter date" name="date" value="{{ old('date') }}">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>


@endsection
