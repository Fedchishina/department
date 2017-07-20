<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;

class WorkerController extends Controller
{
    //возвращает view с работниками
    public function getWorkers() {
        $workers = Worker::orderBy('id', 'desc')->get();
        return view('pages.workers.index', compact('workers'));
    }

    //вставка работника
    public function postAddWorker(DepartmentRequest $request)
    {
        $input = $request->all();
        Department::create($input);
        return redirect('/departments')->with([
            'success' => true,
        ]);
    }

    //изменение работника
    public function postEditWorker(DepartmentRequest $request)
    {
        $input = $request->all();
        $department = Department::find($input['id']);
        $department->update($input);
        return redirect('/departments')->with([
            'success' => true,
        ]);
    }

    //удаление работника
    public function postDelWorker(Request $request)
    {
        $input = $request->all();
        $worker = Worker::find($input['id']);
        $worker->delete($input);
        return redirect('/workers')->with([
            'success' => true,
        ]);
    }
}
