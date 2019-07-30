@extends('layouts.dashboard')
@section('add-noticedetail-page')
  active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Edit Notice Detail</li>
    </ol>
  </div><!--/.row-->
  <div class="container" style="margin-top:30px">
      <div class="row justify-content-center">

          <div class="col-md-6">
              <div class="panel panel-success">
                  <div class="panel-heading">
                    @if (session('success'))
                      <div class="alert alert-success">
                        {{ session('success') }}
                      </div>
                    @endif
                    Edit Notice Detail
                  </div>

                  <div class="panel-body">

                    <form action="{{ url('/update/noticedetail') }}" method="post" enctype="multipart/form-data">
                      @csrf
                <div class="form-group">
                  <label>Notice Title</label>
                  <input type="hidden" name="noticedetail_id" value="{{ $noticedetail->id }}">
                  <input type="text" class="form-control" placeholder="Enter Notice Title" name="notice_title" value="{{ $noticedetail->notice_title }}">
                </div>
                <div class="form-group">
                  <label>Notice Detail</label>
                  <input type="text" class="form-control" placeholder="Enter Notice Detail" name="notice_detail" value="{{ $noticedetail->notice_detail }}">
                </div>
                <div class="form-group">
                  <label>Featured Image</label>
                  <input type="file" class="form-control" placeholder="Enter Featured Image" name="featured_image" value="{{ $noticedetail->featured_image }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
              </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
