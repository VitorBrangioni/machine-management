<?php

namespace MachineManagementApp\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'delete-status',
        'create-status',
        'update-status',
        'delete-machine',
        'update-machine',
        'create-machine',
        'update-sensor'
    ];
}
