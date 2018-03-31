<?php

namespace MachineManagementApp;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'status_id',
    ];

    public function status()
    {
        return $this->belongsTo('MachineManagementApp\Status');
    }
    
}
