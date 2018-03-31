@extends('template.template')

@section('content')

  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Status </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 pull-right">
                <button data-toggle="modal" data-target="#create-status" class="btn btn-success pull-right">Create Status</button>
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
            <tr>
               <td>1</td>
              <td>Tiger Nixon</td>
              <td>15-01-2018</td>
              <td>15-01-2015</td>
              <td>
                  <button data-toggle="modal" data-target="#change-status" class="btn btn-warning">Change</button>
                  <button data-toggle="modal" data-target="#delete-status" class="btn btn-danger">Delete</button>
              </td>
            </tr>
            <tr>
                <td>1</td>
              <td>Garrett Winters</td>
              <td>15-01-2018</td>
              <td>15-01-2015</td>
              <td>
                    <input type="submit" value="change" class="btn btn-warning">
                    <input type="submit" value="delete" class="btn btn-danger">
                </td>
            </tr>
            <tr>
                    <td>1</td>
              <td>Ashton Cox</td>
              <td>15-01-2018</td>
              <td>15-01-2015</td>
              <td>
                    <input type="submit" value="change" class="btn btn-warning">
                    <input type="submit" value="delete" class="btn btn-danger">
                </td>
            </tr>
            <tr>
                    <td>1</td>
              <td>Cedric Kelly</td>
              <td>15-01-2018</td>
              <td>15-01-2015</td>
              <td>
                    <input type="submit" value="change" class="btn btn-warning">
                    <input type="submit" value="delete" class="btn btn-danger">
                </td>
            </tr>
            <tr>
            <td>1</td>
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
    <div class="modal fade" id="change-status" tabindex="-1" role="dialog" aria-labelledby="change-status" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Change Status</h4>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                
                    <label>Status:</label>
                    <input type="text" name="status-name" id="status-name" value="" class="form-control">
                
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Save</a>
                </div>
              </div>
            </div>
          </div>


        <!-- Logout Modal-->
    <div class="modal fade" id="delete-status" tabindex="-1" role="dialog" aria-labelledby="delete-status" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="change-machine">Do you really want to delete this status?</h4>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                    If you delete this status, will not be able to recover it.
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-danger" href="login.html">Delete</a>
                </div>
              </div>
            </div>
          </div>

               <!-- Logout Modal-->
    <div class="modal fade" id="create-status" tabindex="-1" role="dialog" aria-labelledby="create-status" aria-hidden="true">
            <div class="modal-dialog" role="document">
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
                            <input type="text" name="name-status" id="name-status" class="form-control">
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