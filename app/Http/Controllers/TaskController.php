<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        return view('add_task');
    }

    public function getTask()
    {
        $tasks = Task::paginate(3);
        return view('gestion_task', compact('tasks'));
    }

    public function addTask()
    {
        return view('add_tasks');
    }

    public function submitTasks(Request $req)
    {
        $validateData = $req->validate([
            'nom_task' => 'required',
            'debut_task' => 'required | date',
            'fin_task' => 'required | date',
            'description' => 'required',
            'brief_number' => 'required',
        ]);
        DB::table('tasks')->insert([
            'nom_task' => $req->nom_task,
            'debut_task' => $req->debut_task,
            'fin_task' => $req->fin_task,
            'description' => $req->description,
            'brief_id' => $req->brief_number
        ]);
        return back()->with('task_created', 'Task Has Been Created SuccessFully !!');
    }

    public function deleteTask($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return back()->with('task_deleted', 'Task Has Been Created SuccessFully !!');
    }

    public function editTask($id) {
        $tasko = DB::table('tasks')->where('id', $id)->first();
        return view('edit_task', compact('tasko'));
    }
    public function updateTask(Request $req, $id)
    {
        $validateData = $req->validate([
            'nom_task' => 'required',
            'debut_task' => 'required',
            'fin_task' => 'required',
            'description' => 'required',
            'brief_id' => 'required',
        ]);
        DB::table('tasks')->where('id', $id)->update([
            'nom_task' => $req->input('nom_task'),
            'debut_task' => $req->input('debut_task'),
            'fin_task' => $req->input('fin_task'),
            'description' => $req->input('description'),
            'brief_id' => $req->input('brief_id'),
        ]);
        return back()->with('brief_updated', 'Brief Has Been Updated Successfully');
    }

}
