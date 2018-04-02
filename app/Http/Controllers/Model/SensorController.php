<?php

namespace MachineManagementApp\Http\Controllers\Model;

use MachineManagementApp\Sensor;
use MachineManagementApp\Machine;
use Illuminate\Foundation\Bus\DispatchesJobs;
use MachineManagementApp\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SensorController extends Controller
{
    public function getAllWithMachine()
    {
        return Sensor::with('machine')->get();
    }

    public function getAll() 
    {
        return Sensor::all();
    }

    public function countMachines() : int
    {
        return Sensor::count();
    }

    public function update($id, $time)
    {
        $sensor = Sensor::find($id);
        $sensor->event_time = $time;
        $sensor->save();
    }

    public function delete($id)
    {
        Sensor::destroy($id);
    }

    public function create($time, $machineId)
    {
        return Sensor::create(['event_time'=>$time, 'machine_id' => $machineId]);
    }
}
