@extends('template.template')

@section('content')

  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Machines </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 pull-right">
                <button data-toggle="modal" data-target="#create-machine" class="btn btn-success pull-right">Create Machine</button>
            </div>
        </div>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Last change</th>
              <th>Creation date</th>
              <th>actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Last change</th>
              <th>Creation date</th>
              <th>actions</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>Tiger Nixon</td>
              <td>15-01-2018</td>
              <td>15-01-2015</td>
              <td>
                  <button data-toggle="modal" data-target="#change-machine" class="btn btn-warning">Change</button>
                  <button data-toggle="modal" data-target="#delete-machine" class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
              <td>Garrett Winters</td>
              <td>15-01-2018</td>
              <td>15-01-2015</td>
              <td>
                    <input type="submit" value="change" class="btn btn-warning">
                    <input type="submit" value="delete" class="btn btn-danger">
                </td>
            </tr>
            <tr>
              <td>Ashton Cox</td>
              <td>15-01-2018</td>
              <td>15-01-2015</td>
              <td>
                    <input type="submit" value="change" class="btn btn-warning">
                    <input type="submit" value="delete" class="btn btn-danger">
                </td>
            </tr>
            <tr>
              <td>Cedric Kelly</td>
              <td>15-01-2018</td>
              <td>15-01-2015</td>
              <td>
                    <input type="submit" value="change" class="btn btn-warning">
                    <input type="submit" value="delete" class="btn btn-danger">
                </td>
            </tr>
            <tr>
              <td>Brielle Williamson</td>
              <td>15-01-2018</td>
              <td>15-01-2015</td>
              <td>
                    <input type="submit" value="change" class="btn btn-warning">
                    <input type="submit" value="delete" class="btn btn-danger">
                </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

    <!-- Logout Modal-->
    <div class="modal fade" id="change-machine" tabindex="-1" role="dialog" aria-labelledby="change-machine" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="change-machine">Change Machine</h4>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                
                    <label>Machine Name</label>
                    <input type="text" name="machine-name" id="machine-name" value="" class="form-control">
                
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Save</a>
                </div>
              </div>
            </div>
          </div>


        <!-- Logout Modal-->
    <div class="modal fade" id="delete-machine" tabindex="-1" role="dialog" aria-labelledby="delete-machine" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="change-machine">Do you really want to delete this machine?</h4>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                    If you delete this machine, will not be able to recover it.
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-danger" href="login.html">Delete</a>
                </div>
              </div>
            </div>
          </div>

               <!-- Logout Modal-->
    <div class="modal fade" id="create-machine" tabindex="-1" role="dialog" aria-labelledby="create-machine" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="change-machine">Create New Machine</h4>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Name:</label>
                            <input type="text" name="name-machine" id="name-machine2" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <label>Status:</label>
                                <select class="form-control">
                                    <option value="volvo">Select</option>
                                    <option value="volvo">Active</option>
                                    <option value="saab">Manutence</option>
                                </select>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-success" href="login.html">Create</a>
                </div>
              </div>
            </div>
          </div>

@endsection