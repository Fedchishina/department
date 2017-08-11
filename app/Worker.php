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

    /**
     * возвращение коллекции DepartmentWorker сотрудника
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departmentWorkers() {
        return  $this->hasMany('App\DepartmentWorker', 'worker_id', 'id');
    }

    /**
     * возвращает общую зарплату сотрудника (суммируя зп, которую сотрудник получает по каждому отделу)
     * @return mixed - общая зп сотрудника
     */
    public function getAllSalary() {
        return DepartmentWorker::where('worker_id', $this->id)->sum('salary');
    }

    /**
     * возвращение списка отделов, где работает сотрудник, одной строкой через точку с запятой
     * @return string - строка отделов, где работает сотрудник
     */
    public function getAllDepartmentsInString() {
        $allDepartmentsInString = '';
        foreach ($this->departmentWorkers as $departmentWorker) {
            $allDepartmentsInString = $allDepartmentsInString . $departmentWorker->department->name . "; " ;
        }
        return $allDepartmentsInString;
    }

}
