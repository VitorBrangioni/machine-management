@extends('template.template')

@section('content')

  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Machines </div>
    <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <img src="https://brangi-test.nyc3.digitaloceanspaces.com/diagrams/imagem-paginainicial.png " alt="">            
          </div>
        </div>
        <div class="row">
            <div class="col-md-6 pull-right">
                <button data-toggle="modal" data-target="#create-machine-modal" class="btn btn-success pull-right">Create Machine</button>
            </div>
        </div>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Status</th>
              <th>Last change</th>
              <th>Creation date</th>
              <th>actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Status</th>
              <th>Last change</th>
              <th>Creation date</th>
              <th>actions</th>
            </tr>
          </tfoot>
          <tbody>

            @foreach ($machines as $machine)
              <tr>
                <td>{{$machine->name}}</td>
                <td>{{$machine->status->name}}</td>
                <td>{{$machine->updated_at}}</td>
                <td>{{$machine->created_at}}</td>
                <td>
                <button data-toggle="modal" data-target="#change-machine-modal" onclick="auxUpdateMachine({{$machine->id}}, '{{$machine->name}}', '{{$machine->status->id}}')" class="btn btn-warning">Change</button>
                    <button data-toggle="modal" data-target="#delete-machine-modal" onclick="auxDeleteMachine({{$machine->id}})" class="btn btn-danger">Delete</button>
                </td>
              </tr>

            @endforeach
           
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

    <!-- Logout Modal-->
    <div class="modal fade" id="change-machine-modal" tabindex="-1" role="dialog" aria-labelledby="change-machine-modal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form action="{{ url('update-machine')}}" method="post" >
                  {{ csrf_field() }}
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="change-machine-modal">Change Machine</h4>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="machine-id" id="machine-id" value="">
                        <input type="hidden" name="machine-status" id="machine-status" value="">
                    
                        <label>Machine Name</label>
                        <input type="text" name="machine-name" id="machine-name" value="" class="form-control">

                        <select id="change-machine-status" name="change-machine-status" class="form-control">

                            {{-- <option disabled="true" selected value> -- Select a status -- </option> --}}
                              @foreach ($allStatus as $status)
                                <option value="{{$status->id}}">{{$status->name}}</option>
                              @endforeach

                          </select>
                    
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
    <div class="modal fade" id="delete-machine-modal" tabindex="-1" role="dialog" aria-labelledby="delete-machine-modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <form action="{{ url('delete-machine')}}" method="post">
                 {{ csrf_field() }}
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="change-machine-modal">Do you really want to delete this machine?</h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <input type="hidden" name="machine-id-todelete" id="machine-id-todelete" value="">
                      If you delete this machine, will not be able to recover it.
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

               <!-- Logout Modal-->
    <div class="modal fade" id="create-machine-modal" tabindex="-1" role="dialog" aria-labelledby="create-machine-modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ url('create-machine')}}" method="post">
                  {{ csrf_field() }}
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="create-machine-modal">Create New Machine</h4>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Name:</label>
                                <input type="text" name="machine-name" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-md-12">
                                    <label>Status:</label>
                                    <select name="status" class="form-control">

                                      <option disabled selected value> -- Select a status -- </option>
                                        @foreach ($allStatus as $status)
                                          <option value="{{$status->id}}">{{$status->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <label>Sensor Event Time:</label>
                                <input type="time" name="event-time" class="form-control without_ampm">
                              </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-success">Create</button>
                    </div>
                  </div>
                </form>
            </div>
          </div>

@endsection