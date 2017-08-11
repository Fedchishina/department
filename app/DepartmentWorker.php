<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepartmentWorker extends Model
{
    protected $table = 'departments_workers';
    protected $fillable = [
        'department_id',
        'worker_id',
        'salary'
    ];

    public function department() {
        return  $this->hasOne('App\Department', 'id', 'department_id');
    }

    public function worker() {
        return  $this->hasOne('App\Worker', 'id', 'worker_id');
    }
}
