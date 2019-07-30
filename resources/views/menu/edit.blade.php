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
      <li><a href="{{ url('/add/menu') }}">
        Add Menu
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Menus</h1>
    </div>
  </div><!--/.row-->
  <div class="container">
      <div class="row justify-content-center">

          <div class="col-md-6">
              <div class="panel panel-success">
                  <div class="panel-heading">
                    @if (session('success'))
                      <div class="alert alert-success">
                        {{ session('success') }}
                      </div>
                    @endif

                    Edit Menus
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/menu') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Menu Title</label>
                  <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                  <input type="text" class="form-control" placeholder="Enter menu para" name="title" value="{{ $menu->title }}">
                </div>
                <div class="form-group">
                  <label>Menu Link1</label>
                  <input type="text" class="form-control" placeholder="Enter menu link1" name="link1" value="{{ $menu->link1 }}">
                </div>
                <div class="form-group">
                  <label>Menu Link2</label>
                  <input type="text" class="form-control" placeholder="Enter menu link2" name="link2" value="{{ $menu->link2 }}">
                </div>
                <div class="form-group">
                  <label>Menu Link3</label>
                  <input type="text" class="form-control" placeholder="Enter menu link3" name="link3" value="{{ $menu->link3 }}">
                </div>
                <div class="form-group">
                  <label>Menu Link4</label>
                  <input type="text" class="form-control" placeholder="Enter menu link3" name="link4" value="{{ $menu->link4 }}">
                </div>
                <div class="form-group">
                  <label>Menu Link5</label>
                  <input type="text" class="form-control" placeholder="Enter menu link3" name="link5" value="{{ $menu->link5 }}">
                </div>
                <div class="form-group">
                  <label>Menu Link6</label>
                  <input type="text" class="form-control" placeholder="Enter menu link3" name="link6" value="{{ $menu->link6 }}">
                </div>
                <div class="form-group">
                  <label>Menu Link7</label>
                  <input type="text" class="form-control" placeholder="Enter menu link3" name="link7" value="{{ $menu->link7 }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Menus</button>
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
      </div>
  </div>
@endsection
