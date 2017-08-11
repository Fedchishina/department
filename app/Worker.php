<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = 'workers';
    protected $fillable = [
        'firstName',
        'lastName',
        'middleName',
        'sex'
    ];

    public function departmentWorkers() {
        return  $this->hasMany('App\DepartmentWorker', 'department_id', 'id');
    }

    public function getAllSalary() {
        return DepartmentWorker::where('worker_id', $this->id)->sum('salary');
    }


}
