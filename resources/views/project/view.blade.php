@extends('layouts.dashboard')
@section('add-project-page')
active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Project</li>
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
            List Project
          </div>

          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <th>Heading</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </thead>
              @foreach ($projects as $project)
                <tr>
                  <td>{{ $project->heading }}</td>
                  <td>{{ $project->created_at }}</td>
                  <td>{{ $project->updated_at ? $project->updated_at:"Not Yet" }}</td>
                  <td>
                    <a class="btn btn-danger" href="{{ url('delete/project') }}/{{ $project->id }}"> <span style="color:white">Delete</span> </a>|
                    <a class="btn btn-info" href="{{ url('edit/project') }}/{{ $project->id }}"> <span style="color:white">Edit</span> </a>
                  </td>
                </tr>
              @endforeach
            </table>
            {{ $projects->links() }}

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
              Add Project
            </div>

            <div class="panel-body">

              <form action="{{ url('/insert/project') }}" method="post">
                @csrf
          <div class="form-group">
            <label>heading</label>
            <input type="text" class="form-control" placeholder="Enter heading" name="heading" value="{{ old('heading') }}">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>


@endsection
