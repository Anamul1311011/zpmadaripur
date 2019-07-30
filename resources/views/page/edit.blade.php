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
      <li><a href="{{ url('/add/page') }}">
        Add Page
      </a></li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Edit Page</h1>
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

                    Edit Page
                  </div>

                  <div class="panel-body">
                    <form action="{{ url('/update/page') }}" method="post" enctype="multipart/form-data">
                      @csrf
                  <div class="form-group">
                        <label>Menu Id</label>
                        <input type="hidden" name="page_id" value="{{ $page->id }}">
                        <input type="text" class="form-control" placeholder="Enter Menu Id" name="menu_id" value="{{ $page->menu_id }}">
                  </div>
                  <div class="form-group">
                        <label>Menu Title Id</label>
                        <input type="text" class="form-control" placeholder="Enter Menu Title Id" name="menu_title_id" value="{{ $page->menu_title_id }}">
                  </div>
                <div class="form-group">
                  <label>Page title</label>
                  <input type="text" class="form-control" placeholder="Enter Page title" name="page_title" value="{{ $page->page_title }}">
                </div>
                <div class="form-group">
                  <label>Featured image</label>
                  <input type="file" class="form-control" placeholder="Enter Featured image" name="featured_image" value="{{ $page->featured_image }}">
                </div>
                <div class="form-group">
                  <label>Page content</label>
                  <input type="text" class="form-control" placeholder="Enter Page content" name="page_content" value="{{ $page->page_content }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Chiefs</button>
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
