@extends('layouts.dashboard')
@section('add-ilink-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Ilink</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Ilink</h1>
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

               Ilink List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Heading</th>
                  <th>title1</th>
                  <th>title2</th>
                  <th>title3</th>
                  <th>title4</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($ilinks as $ilink)
              <tr>
                <td>{{ $ilink->heading }}</td>
                <td>{{ $ilink->title1 }}</td>
                <td>{{ $ilink->title2 }}</td>
                <td>{{ $ilink->title3 }}</td>
                <td>{{ $ilink->title4 }}</td>
                <td>{{ $ilink->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $ilink->updated_at ? $ilink->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/ilink') }}/{{ $ilink->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a>
                  <a class="btn btn-info" href="{{ url('edit/ilink') }}/{{ $ilink->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Ilink
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/ilink') }}" method="post">
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
