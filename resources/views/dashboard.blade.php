@extends('template.template')

@section('content')


@php
    // var_dump($machines);


@endphp

  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-clipboard"></i>
          </div>
          <div class="mr-5">{{$countMachines}} Maquinas Cadastradas!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-cogs"></i>
          </div>
          <div class="mr-5">11 Maquinas em Manutenção!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-rocket"></i>
          </div>
          <div class="mr-5">123 Maquinas em Produção!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa fa-fw fa-power-off"></i>
          </div>
          <div class="mr-5">13 Maquinas com Defeitos!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <span class="float-left">View Details</span>
          <span class="float-right">
            <i class="fa fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Data Table Example</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Status</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Status</th>
            </tr>
          </tfoot>
          <tbody>

            @foreach ($machines as $machine)
                <tr>
                  <td>{{$machine->name}}</td>
                  <td>{{$machine->status->name}}</td>
                </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>


@endsection