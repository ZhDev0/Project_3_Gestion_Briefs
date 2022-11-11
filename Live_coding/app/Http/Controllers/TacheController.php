<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function index() {
        return view('add_task');
    }
    public function submitTask(Request $req) {
        Tache::insert([
            'nom_tache' => $req->nom_tache,
            'date_debut' => $req->date_debut,
            'date_fin' => $req->date_fin,
            'Description' => $req->Description,
            'brief_id' => $req->brief_id,
        ]);
        return Back()->with('Task Added Successfully');
    }
    public function editTask($id) {
        $tache = Tache::where('id', $id)->first();
        // $tache = Tache::where('brief_id', $id)->first();
        return view('edit_task',compact('tache'));
    }
    public function updateTask(Request $req, $id) {
        Tache::where('id', $id)->update([
            'nom_tache' => $req->nom_tache,
            'date_debut' => $req->date_debut,
            'date_fin' => $req->date_fin,
            'Description' => $req->Description,
            'brief_id' => $req->brief_id
        ]);
        return Back();
    }

    public function destroyTask($id) {
        Tache::where('id', $id)->delete();
        return Back();
    }
}
