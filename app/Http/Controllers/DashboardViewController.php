<?php

namespace MachineManagementApp\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use MachineManagementApp\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use MachineManagementApp\Http\Controllers\Model\MachineController;

class DashboardViewController extends Controller
{
    public function index()
    {
        $machineController = new MachineController();
        $machines = $machineController->getAllMachinesWithStatus();
        $countMachines = $machineController->countMachines();

        return view('dashboard', ['machines' => $machines, 'countMachines' => $countMachines]);
    }
}
