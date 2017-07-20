<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DepartmentRequest;
use App\Department;

class DepartmentController extends Controller
{
    //возвращает view с отделами
    public function getDepartments() {
        $departments = Department::orderBy('name')->get();
        return view('pages.departments.index', compact('departments'));
    }

    //вставка отдела
    public function postAddDepartment(DepartmentRequest $request)
    {
        $input = $request->all();
        Department::create($input);
        return redirect('/departments')->with([
            'success' => true,
        ]);
    }

    //изменение отдела
    public function postEditDepartment(DepartmentRequest $request)
    {
        $input = $request->all();
        $department = Department::find($input['id']);
        $department->update($input);
        return redirect('/departments')->with([
            'success' => true,
        ]);
    }

    //удаление отдела
    public function postDelDepartment(Request $request)
    {
        $input = $request->all();
        $department = Department::find($input['id']);
        $department->delete($input);
        return redirect('/departments')->with([
            'success' => true,
        ]);
    }
}
