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
}
