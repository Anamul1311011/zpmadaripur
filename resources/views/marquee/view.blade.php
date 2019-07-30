@extends('layouts.dashboard')
@section('add-marquee-page')
active
@endsection
@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Add Marquee</li>
    </ol>
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
            List Marquee
          </div>

          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <th>Text1</th>
                <th>Text2</th>
                <th>Text3</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </thead>
              @foreach ($marquees as $marquee)
                <tr>
                  <td>{{ $marquee->text1 }}</td>
                  <td>{{ $marquee->text2 }}</td>
                  <td>{{ $marquee->text3 }}</td>
                  <td>{{ $marquee->created_at }}</td>
                  <td>{{ $marquee->updated_at ? $marquee->updated_at:"Not Yet" }}</td>
                  <td>
                    <a class="btn btn-danger" href="{{ url('delete/marquee') }}/{{ $marquee->id }}"> <span style="color:white">Delete</span> </a>|
                    <a class="btn btn-info" href="{{ url('edit/marquee') }}/{{ $marquee->id }}"> <span style="color:white">Edit</span> </a>
                  </td>
                </tr>
              @endforeach
            </table>
            {{ $marquees->links() }}

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
              Add Marquee
            </div>

            <div class="panel-body">

              <form action="{{ url('/insert/marquee') }}" method="post">
                @csrf
          <div class="form-group">
            <label>Text1</label>
            <input type="text" class="form-control" placeholder="Enter text1" name="text1" value="{{ old('text1') }}">
          </div>
          <div class="form-group">
            <label>Text2</label>
            <input type="text" class="form-control" placeholder="Enter text2" name="text2" value="{{ old('text2') }}">
          </div>
          <div class="form-group">
            <label>Text3</label>
            <input type="text" class="form-control" placeholder="Enter text3" name="text3" value="{{ old('text3') }}">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
            </div>
        </div>
      </div>
    </div><!--/.row-->
  </div>


@endsection
