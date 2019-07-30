@extends('layouts.dashboard')
@section('add-page-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Page</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Page</h1>
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

               Page List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Menu Id</th>
                  <th>Menu Title Id</th>
                  <th>Page title</th>
                  <th>Featured image</th>
                  <th>Page content</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($pages as $page)
              <tr>
                <td>{{ $page->menu_id }}</td>
                <td>{{ $page->menu_title_id }}</td>
                <td>{{ $page->page_title }}</td>
                <td>{{ $page->page_content }}</td>
                <td><img width="100" src="{{asset($page->featured_image)}}" alt=""></td>
                <td>{{ $page->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $page->updated_at ? $page->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/page') }}/{{ $page->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a> |
                  <a class="btn btn-info" href="{{ url('edit/page') }}/{{ $page->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Pages
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/page') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <label>Menu Id</label>
                  <input type="text" class="form-control" placeholder="Enter Menu Id" name="menu_id" >
                </div>
                <div class="form-group">
                  <label>Menu Title Id</label>
                  <input type="text" class="form-control" placeholder="Enter Menu Title Id" name="menu_title_id" >
                </div>
          <div class="form-group">
            <label>Page title</label>
            <input type="text" class="form-control" placeholder="Enter Page title" name="page_title" >
          </div>
          <div class="form-group">
            <label>Featured image</label>
            <input type="file" class="form-control" placeholder="Enter Featured image" name="featured_image" >
          </div>
          <div class="form-group">
            <label>Page content</label>
            <input type="text" class="form-control" placeholder="Enter Page content" name="page_content" >
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
