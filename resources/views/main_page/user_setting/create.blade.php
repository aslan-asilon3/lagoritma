@extends('templates.template')

@section('content')
    

<form class="form-horizontal" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Insert Name">
          @error('name')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Insert Email">
          @error('email')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" placeholder="Insert Status">
          @error('status')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Insert Password">
          @error('password')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck2">
            <label class="form-check-label" for="exampleCheck2">Remember me</label>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info">Sign in</button>
      <button type="submit" class="btn btn-default float-right">Cancel</button>
    </div>
    <!-- /.card-footer -->
  </form>
@endsection