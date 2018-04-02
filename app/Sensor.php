<?php

namespace MachineManagementApp;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_time', 'machine_id',
    ];

    public function machine()
    {
        return $this->belongsTo('MachineManagementApp\Machine');
    }
}
