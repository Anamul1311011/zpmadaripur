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
      <li><a href="{{ url('/add/submenu') }}">
        Add Submenu
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Submenu</h1>
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

                    Edit Submenu
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/submenu') }}" method="post">
                      @csrf
                <div class="form-group">
                  <label>Menu Item </label>
                  <input type="hidden" name="submenu_id" value="{{ $submenu->id }}">
                  <input type="text" class="form-control" placeholder="Enter menu id" name="mitem_id" value="{{ $submenu->mitem_id }}">
                </div>
                <div class="form-group">
                  <label>Page Id</label>
                  <input type="text" class="form-control" placeholder="Enter page id" name="page_id" value="{{ $submenu->mpage_id }}">
                </div>

                <button type="submit" class="btn btn-primary">Update Submenu</button>
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
