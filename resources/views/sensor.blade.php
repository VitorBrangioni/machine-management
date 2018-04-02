@extends('template.template')

@section('content')

  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Data Table Example</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Machine Sensor</th>
              <th>Time</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Machine Sensor</th>
              <th>Time</th>
              <th>Actions</th>
            </tr>
          </tfoot>
          <tbody>

           @foreach ($allSensor as $sensor)
                <tr>
                  <td>{{$sensor->machine->name}}</td>
                  <td>{{$sensor->event_time}}</td>
                  <td>
                  <button data-toggle="modal" data-target="#change-event-time-modal" onclick="auxChangeEventTime({{$sensor->id}}, '{{$sensor->event_time}}')" class="btn btn-warning">Change Event Time</button>
                  </td>
                </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
           <!-- Logout Modal-->
           <div class="modal fade" id="change-event-time-modal" tabindex="-1" role="dialog" aria-labelledby="change-event-time-modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="{{ url('update-sensor')}}" method="post">
                  {{ csrf_field() }}
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="create-machine-modal">Create New Machine</h4>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <input type="hidden" name="sensor-id" id="sensor-id">
                            <div class="row">
                              <div class="col-md-12">
                                <label>Sensor Event Time:</label>
                                <input type="time" name="event-time" id="event-time" class="form-control without_ampm">
                              </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </div>
@endsection