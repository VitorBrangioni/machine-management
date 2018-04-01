<?php

namespace MachineManagementApp\Http\Controllers\Model;

use MachineManagementApp\Status;
use Illuminate\Foundation\Bus\DispatchesJobs;
use MachineManagementApp\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * Status Controller
 * 
 * @author VitorBrangioni <vitorh.brangioni@gmail.com>
 */
class StatusController extends Controller
{
    public function getAll()
    {
        return Status::all();
    }

    public function delete($id)
    {
        Status::destroy($id);
    }

    public function create(String $name)
    {
        Status::create(array('name' => $name));
    }

    public function update(int $id, String $name)
    {
        $status = Status::find($id);
        $status->name = $name;
        $status->save();
    }
}
