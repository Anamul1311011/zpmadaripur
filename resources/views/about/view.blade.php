@extends('layouts.dashboard')
@section('add-about-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add About</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add About</h1>
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

               About List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Heading</th>
                  <th>title1</th>
                  <th>title2</th>
                  <th>title3</th>
                  <th>title4</th>
                  <th>title5</th>
                  <th>title6</th>
                  <th>title7</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($abouts as $about)
              <tr>
                <td>{{ $about->heading }}</td>
                <td>{{ $about->title1 }}</td>
                <td>{{ $about->title2 }}</td>
                <td>{{ $about->title3 }}</td>
                <td>{{ $about->title4 }}</td>
                <td>{{ $about->title5 }}</td>
                <td>{{ $about->title6 }}</td>
                <td>{{ $about->title7 }}</td>
                <td>{{ $about->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $about->updated_at ? $about->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/about') }}/{{ $about->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a>
                  <a class="btn btn-info" href="{{ url('edit/about') }}/{{ $about->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add About
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/about') }}" method="post">
                @csrf
                <div class="form-group">
                  <label>Heading</label>
                  <input type="text" class="form-control" placeholder="Enter Heading" name="heading" >
                </div>
                <div class="form-group">
                  <label>Title1</label>
                  <input type="text" class="form-control" placeholder="Enter title1" name="title1" >
                </div>
                <div class="form-group">
                  <label>Title2</label>
                  <input type="text" class="form-control" placeholder="Enter title2" name="title2" >
                </div>
                <div class="form-group">
                  <label>Title3</label>
                  <input type="text" class="form-control" placeholder="Enter title3" name="title3" >
                </div>
                <div class="form-group">
                  <label>Title4</label>
                  <input type="text" class="form-control" placeholder="Enter title4" name="title4" >
                </div>
                <div class="form-group">
                  <label>Title5</label>
                  <input type="text" class="form-control" placeholder="Enter title5" name="title5" >
                </div>
                <div class="form-group">
                  <label>Title6</label>
                  <input type="text" class="form-control" placeholder="Enter title6" name="title6" >
                </div>
                <div class="form-group">
                  <label>Title7</label>
                  <input type="text" class="form-control" placeholder="Enter title7" name="title7" >
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
