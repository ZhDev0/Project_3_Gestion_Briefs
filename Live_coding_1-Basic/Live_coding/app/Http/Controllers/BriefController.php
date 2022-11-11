<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BriefController extends Controller
{
    public function index() {
        $briefs = Brief::all();
        return view('gestion_brief', compact('briefs'));
    }

    public function addBrief() {
        return view('add_brief');
    }

    public function submitBrief(Request $req) {
        Brief::insert([
            'nom_brief' => $req->nom_brief,
            'date_livraison' => $req->date_livraison,
            'date_recuperation' => $req->date_recuperation
        ]);
        return Back()->with('Brief Added Successfully');
    }
    public function editBrief($id) {
        $brief = Brief::where('id', $id)->first();
        return view('edit_brief',compact('brief'));
    }
    public function updateBrief(Request $req, $id) {
        Brief::where('id', $id)->update([
            'nom_brief' => $req->nom_brief,
            'date_livraison' => $req->date_livraison,
            'date_recuperation' => $req->date_recuperation,
        ]);
        return Back();
    }

    public function destroyBrief($id) {
        Brief::where('id', $id)->delete();
        return Back();
    }
}
