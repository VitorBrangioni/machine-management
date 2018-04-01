@extends('template.template')

@section('content')

@if (session('test'))
    <div class="alert alert-success">
        {{ session('test') }}
    </div>
@endif

@if (isset($erros))

  @php
      var_dump($erros);
  @endphp
  @foreach ($erros as $error)

    <div>{{ $error }}</div>
  @endforeach
@endif



  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Status </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 pull-right">
                <button data-toggle="modal" data-target="#create-status-modal" class="btn btn-success pull-right">Create Status</button>
            </div>
        </div>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Code</th>
              <th>Name</th>
              <th>Last change</th>
              <th>Creation date</th>
              <th>actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Code</th>
              <th>Name</th>
              <th>Last change</th>
              <th>Creation date</th>
              <th>actions</th>
            </tr>
          </tfoot>
          <tbody>

            @foreach ($allStatus as $status)
              <tr>
                <td>{{$status->id}}</td>
                <td>{{$status->name}}</td>
                <td>{{$status->updated_at}}</td>
                <td>{{$status->created_at}}</td>
                <td>
                    <button data-toggle="modal" data-target="#change-status-modal" onclick="hiddenUpdate({{$status->id}}, '{{$status->name}}')" class="btn btn-warning">Change</button>
                    <button data-toggle="modal" data-target="#delete-status-modal" onclick="hiddenDelete({{$status->id}})" class="btn btn-danger">Delete</button>
                </td>
              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

    <!-- Logout Modal-->
    <div class="modal fade" id="change-status-modal" tabindex="-1" role="dialog" aria-labelledby="change-status-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form action="{{ url('update-status')}}" method="post">
                  {{ csrf_field() }}
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Change Status</h4>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="status-id" id="status-id">
                    
                        <label>Status:</label>
                        <input type="text" name="status-name" id="status-name" value="" class="form-control">
                    
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </div>
                  </div>
                </form>
            </div>
          </div>


        <!-- Logout Modal-->
    <div class="modal fade" id="delete-status-modal" tabindex="-1" role="dialog" aria-labelledby="delete-status-modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <form action="{{ url('delete-status')}}" method="post">
                {{ csrf_field() }}
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="change-machine">Do you really want to delete this status?</h4>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  If you delete this status, will not be able to recover it.
                  <input type="hidden" name="id-delete" id="id-delete">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <input type="submit" value="Delete" class="btn btn-danger">
                  </div>
                </div>
              </form> 
            </div>
          </div>

               <!-- Logout Modal-->
    <div class="modal fade" id="create-status-modal" tabindex="-1" role="dialog" aria-labelledby="create-status-modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <form action="{{ url('create-status') }}" method="post">
                {{ csrf_field() }}
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="change-machine">Create New Status</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12">
                              <label>Name:</label>
                              <input type="text" name="status-name" id="name-status" class="form-control">
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    {{-- <a class="btn btn-success" href="login.html">Create</a> --}}
                    <button type="submit" name="submit" class="btn btn-success">Create</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

@endsection