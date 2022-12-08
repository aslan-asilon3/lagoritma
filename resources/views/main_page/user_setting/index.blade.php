@extends('templates/template')

@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('users.create') }}" type="button" class="btn btn-default" >
          <i class="fa fa-plus"></i> Add User
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            @forelse ($users as $user)
            <tr>
                <td>{{ $user->image }}</td>
                <td>{{ $user->name }}</td>
                <td>{!! $user->email !!}</td>
                <td>{{ $user->status }}</td>
                <td>{!! $user->created_at !!}</td>
                <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                    </form>
                </td>
            </tr>
          @empty
              <div class="alert alert-danger">
                  Data user belum Tersedia.
              </div>
          @endforelse

          </tr>
          </tbody>
          <tfoot>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->


    

  </div>
  <!-- /.col -->

<!-- /.col -->
</div>

<div class="row">
  <div class="row-12">
    {{ $users->links() }}
  </div>
</div>
<!-- /.row -->




{{-- MODAL --}}
<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

            </div>
            <!-- /.card -->
      </div>
      <div class="modal-footer justify-content-between">

      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


</div>

@endsection