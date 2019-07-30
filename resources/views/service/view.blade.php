@extends('layouts.dashboard')
@section('add-service-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Service</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Service</h1>
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

               Service List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Heading</th>
                  <th>Detail1</th>
                  <th>Detail2</th>
                  <th>Detail3</th>
                  <th>Title1</th>
                  <th>Title2</th>
                  <th>Title3</th>
                  <th>Image</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($services as $service)
              <tr>
                <td>{{ $service->heading }}</td>
                <td>{{ $service->detail1 }}</td>
                <td>{{ $service->detail2 }}</td>
                <td>{{ $service->detail3 }}</td>
                <td>{{ $service->title1 }}</td>
                <td>{{ $service->title2 }}</td>
                <td>{{ $service->title3 }}</td>
                <td><img width="100" src="{{asset($service->image)}}" alt=""></td>
                <td>{{ $service->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $service->updated_at ? $service->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/service') }}/{{ $service->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a> |
                  <a class="btn btn-info" href="{{ url('edit/service') }}/{{ $service->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Service
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/service') }}" method="post" enctype="multipart/form-data">
                @csrf
          <div class="form-group">
            <label>Service Heading</label>
            <input type="text" class="form-control" placeholder="Enter service heading" name="heading" >
          </div>
          <div class="form-group">
            <label>Service Detail1</label>
            <input type="text" class="form-control" placeholder="Enter service Detail1" name="detail1" >
          </div>
          <div class="form-group">
            <label>Service Detail2</label>
            <input type="text" class="form-control" placeholder="Enter service Detail2" name="detail2" >
          </div>
          <div class="form-group">
            <label>Service Detail3</label>
            <input type="text" class="form-control" placeholder="Enter service Detail3" name="detail3" >
          </div>
          <div class="form-group">
            <label>Service Title1</label>
            <input type="text" class="form-control" placeholder="Enter service title1" name="title1" >
          </div>
          <div class="form-group">
            <label>Service Title2</label>
            <input type="text" class="form-control" placeholder="Enter service title2" name="title2" >
          </div>
          <div class="form-group">
            <label>Service Title3</label>
            <input type="text" class="form-control" placeholder="Enter service title3" name="title3" >
          </div>
          <div class="form-group">
            <label>Service Image</label>
            <input type="file" class="form-control" placeholder="Enter service Image" name="image" >
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
