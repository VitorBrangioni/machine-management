<?php

namespace MachineManagementApp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use MachineManagementApp\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use MachineManagementApp\Http\Controllers\Model\SensorController;

class SensorViewController extends Controller
{
    public function index()
    {
        $sensorController = new SensorController();
        $allSensor = $sensorController->getAllWithMachine();

        return view('sensor', ['allSensor' => $allSensor]);
    }

    public function update(Request $request)
    {
        $eventTime = $request->input('event-time');
        $sensorId = $request->input('sensor-id');

        $sensorController = new SensorController();
        $sensorController->update($sensorId, $eventTime);

        return redirect('sensor');
    }
}
