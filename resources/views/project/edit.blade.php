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
      <li class="active">Edit Project</li>
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
                    Edit Project
                  </div>

                  <div class="panel-body">

                    <form action="{{ url('/update/project') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Heading</label>
                  <input type="hidden" name="project_id" value="{{ $project->id }}">
                  <input type="text" class="form-control" placeholder="Enter heading" name="heading" value="{{ $project->heading }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
