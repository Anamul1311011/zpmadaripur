@extends('layouts.dashboard')
@section('add-submenu-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Submenu</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Add Submenu</h1>
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

               Submenu List
            </div>

            <div class="panel-body">
              <table class="table table-bordered">
                <thead>
                  <th>Menuitem</th>
                  <th>Page Title</th>
                  <th>Created At</th>
                  <th>Last Updated At</th>
                  <th>Action</th>
                </thead>
            @foreach ($submenus as $submenu)
              <tr>
                <td>{{ $submenu->menuinfo->title }}</td>
                <td>{{ $submenu->pageinfo->title }}</td>
                <td>{{ $submenu->created_at->format('d-m-Y H:i:s A') }}</td>
                <td>{{ $submenu->updated_at ? $submenu->updated_at:"Not Yet" }}</td>
                <td>
                  <a class="btn btn-danger" href="{{ url('delete/submenu') }}/{{ $submenu->id }}"> <span style="color:white"><i class="fa fa-trash" aria-hidden="true"></i></span> </a>
                  <a class="btn btn-info" href="{{ url('edit/submenu') }}/{{ $submenu->id }}"> <span style="color:white"><i class="fa fa-pencil" aria-hidden="true"></i></span> </a>
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

              Add Submenu
            </div>

            <div class="panel-body">
              <form action="{{ url('/insert/submenu') }}" method="post">
                @csrf
                <div class="form-group">
                  <label>Menu Item</label>
                  <select name="mitem_id" class="form-control">
                    @foreach($menu_item as $item)
                      <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                  </select>
                </div>
                  <div class="form-group">
                  <label>page</label>
                  <select name="page_id" class="form-control">
                    @foreach($pages as $item)
                      <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach
                  </select>
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
