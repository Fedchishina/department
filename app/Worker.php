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
}
