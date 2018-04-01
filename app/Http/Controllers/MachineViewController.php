<?php

namespace MachineManagementApp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use MachineManagementApp\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use MachineManagementApp\Http\Controllers\Model\StatusController;
use MachineManagementApp\Http\Controllers\Model\MachineController;

class MachineViewController extends Controller
{
    public function index()
    {
        $machineController = new MachineController();
        $machines = $machineController->getAllMachinesWithStatus();

        $statusController = new StatusController();
        $allStatus = $statusController->getAll();


        return view('machines', ['machines' => $machines, 'allStatus' => $allStatus]);
    }

    public function delete(Request $request)
    {
        $machineId = $request->input('machine-id-todelete');

        $machineController = new MachineController();
        $machineController->delete($machineId);

        return redirect('machines');
    }

    public function create(Request $request)
    {
        $machineName = $request->input('machine-name');
        $statusId = $request->input('status');

        $machineController = new MachineController();
        $machineController->create($machineName, $statusId);

        return redirect('machines');
    }

    public function update(Request $request)
    {
        $machineId = $request->input('machine-id');
        $machineName = $request->input('machine-name');
        $statusId = $request->input('change-machine-status');

        $statusController = new MachineController();
        $statusController->update($machineId, $machineName, $statusId);

        return redirect('machines');
    }
}
