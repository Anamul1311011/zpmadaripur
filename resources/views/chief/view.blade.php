@extends('layouts.dashboard')
@section('add-chief-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Chief</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Chief</h1>
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

               Chief List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Heading</th>
                  <th>Name</th>
                  <th>Zilla</th>
                  <th>Phone</th>
                  <th>Mobile</th>
                  <th>Image</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($chiefs as $chief)
              <tr>
                <td>{{ $chief->heading }}</td>
                <td>{{ $chief->name }}</td>
                <td>{{ $chief->zilla }}</td>
                <td>{{ $chief->phone }}</td>
                <td>{{ $chief->mobile }}</td>
                <td><img width="100" src="{{asset($chief->image)}}" alt=""></td>
                <td>{{ $chief->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $chief->updated_at ? $chief->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/chief') }}/{{ $chief->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a> |
                  <a class="btn btn-info" href="{{ url('edit/chief') }}/{{ $chief->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Chiefs
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/chief') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <label>Heading</label>
                  <input type="text" class="form-control" placeholder="Enter Heading" name="heading" >
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Enter Name" name="name" >
                </div>
                <div class="form-group">
                  <label>Zilla</label>
                  <input type="text" class="form-control" placeholder="Enter zilla" name="zilla" >
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" placeholder="Enter Phone" name="phone" >
                </div>
                <div class="form-group">
                  <label>Mobile</label>
                  <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile" >
                </div>
          <div class="form-group">
            <label>Chief Image</label>
            <input type="file" class="form-control" placeholder="Enter chief Image" name="image" >
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
