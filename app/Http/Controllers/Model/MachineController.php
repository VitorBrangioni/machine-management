<?php

namespace MachineManagementApp\Http\Controllers\Model;

use MachineManagementApp\Machine;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use MachineManagementApp\Http\Controllers\Controller;

class MachineController extends Controller
{
    public function getAllMachinesWithStatus()
    {
        return Machine::with('status')->get();
    }

    public function getAll() 
    {
        return Machine::all();
    }

    public function countMachines() : int
    {
        return Machine::count();
    }

    public function update($id, $name, $statusId)
    {
        $machine = Machine::find($id);
        $machine->name = $name;
        $machine->status_id = $statusId;
        $machine->save();
    }

    public function delete($id)
    {
        Machine::destroy($id);
    }

    public function create($name, $statusId)
    {
        Machine::create(['name'=>$name, 'status_id' => $statusId]);
    }
}
