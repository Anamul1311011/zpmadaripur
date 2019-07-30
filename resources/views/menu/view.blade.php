@extends('layouts.dashboard')
@section('add-menu-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Menu</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Menu</h1>
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

               Menu List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Menu Title</th>
                  <th>Link1</th>
                  <th>Link2</th>
                  <th>Link3</th>
                  <th>Link4</th>
                  <th>Link5</th>
                  <th>Link6</th>
                  <th>Link7</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($menus as $menu)
              <tr>
                <td>{{ $menu->title }}</td>
                <td>{{ $menu->link1 }}</td>
                <td>{{ $menu->link2 }}</td>
                <td>{{ $menu->link3 }}</td>
                <td>{{ $menu->link4 }}</td>
                <td>{{ $menu->link5 }}</td>
                <td>{{ $menu->link6 }}</td>
                <td>{{ $menu->link7 }}</td>
                <td>{{ $menu->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $menu->updated_at ? $menu->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/menu') }}/{{ $menu->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a>
                  <a class="btn btn-info" href="{{ url('edit/menu') }}/{{ $menu->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Menu
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/menu') }}" method="post">
                @csrf
                <div class="form-group">
                  <label>Menu Title</label>
                  <input type="text" class="form-control" placeholder="Enter Menu Title" name="title" >
                </div>
                <div class="form-group">
                  <label>Menu link1</label>
                  <input type="text" class="form-control" placeholder="Enter Menu link1" name="link1" >
                </div>
                <div class="form-group">
                  <label>Menu link2</label>
                  <input type="text" class="form-control" placeholder="Enter Menu link2" name="link2" >
                </div>
                <div class="form-group">
                  <label>Menu link3</label>
                  <input type="text" class="form-control" placeholder="Enter Menu link3" name="link3" >
                </div>
                <div class="form-group">
                  <label>Menu link4</label>
                  <input type="text" class="form-control" placeholder="Enter Menu link4" name="link4" >
                </div>
                <div class="form-group">
                  <label>Menu link5</label>
                  <input type="text" class="form-control" placeholder="Enter Menu link5" name="link5" >
                </div>
                <div class="form-group">
                  <label>Menu link6</label>
                  <input type="text" class="form-control" placeholder="Enter Menu link6" name="link6" >
                </div>
                <div class="form-group">
                  <label>Menu link7</label>
                  <input type="text" class="form-control" placeholder="Enter Menu link7" name="link7" >
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
