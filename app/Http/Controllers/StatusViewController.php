<?php

namespace MachineManagementApp\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Validator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use MachineManagementApp\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use MachineManagementApp\Http\Controllers\Model\StatusController;

class StatusViewController extends Controller
{
    public function index()
    {
        $statusController = new StatusController();
        $AllStatus = $statusController->getAll();

        return view('status', ['allStatus' => $AllStatus]);
    }

    public function delete(Request $request)
    {
        $statusId = $request->input('id-delete');

        $statusController = new StatusController();
        try {
            $statusController->delete($statusId);
        } catch (QueryException $e) {
            $errors['Can\'t delete this status'] = 'There are machines using this status';
        }

        return redirect('status');
    }

    public function create(Request $request)
    {
        $statusName = $request->input('status-name');

        $statusController = new StatusController();
        $statusController->create($statusName);

        return redirect('status');
    }

    public function update(Request $request)
    {
        $statusName = $request->input('status-name');
        $statusId = $request->input('status-id');

        $statusController = new StatusController();
        $statusController->update($statusId, $statusName);

        return redirect('status');
    }
}
