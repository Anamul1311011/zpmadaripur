@extends('layouts.dashboard')
@section('add-logo-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Logo</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Logo</h1>
    </div>
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

               Logo List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Title</th>
                  <th>Logo image</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($logos as $logo)
              <tr>
                <td>{{ $logo->title }}</td>
                <td><img width="100" src="{{asset($logo->logo_image)}}" alt=""></td>
                <td>{{ $logo->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $logo->updated_at ? $logo->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/logo') }}/{{ $logo->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a> |
                  <a class="btn btn-info" href="{{ url('edit/logo') }}/{{ $logo->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Logo
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/logo') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <label>Logo title</label>
                  <input type="text" class="form-control" placeholder="Enter banner title" name="title" >
                      </div>
                <div class="form-group">
                  <label>Logo Image</label>
                  <input type="file" class="form-control" placeholder="Enter banner Image" name="logo_image" >
                </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
    @if ($errors->all())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $value)
          <li>{{ $value }}</li>
        @endforeach
      </div>
    @endif
            </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>

@endsection
