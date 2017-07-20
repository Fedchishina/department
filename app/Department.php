<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';
    protected $fillable = [
        'name',
    ];

    public function departmentWorkers() {
        return  $this->hasMany('App\DepartmentWorker', 'department_id', 'id');
    }
}
