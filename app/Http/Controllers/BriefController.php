<?php

namespace App\Http\Controllers;

use App\Models\Brief;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BriefController extends Controller
{
    public function index() {
        return view('gestion_briefs');
    }

    public function getBriefs()
    {
        $briefs = Brief::paginate(4);
        return view('gestion_briefs', compact('briefs'));
    }

    public function getBrief($id)
    {
        $brief = Brief::findOrFail($id);

        return view('gestion_brief', [
            'brief' => $brief
        ]);
    }

    public function getBriefForTask()
    {
        $briefs1 = Brief::all();
        return view('gestion_task', compact('briefs1'));
    }

    public function addBrief()
    {
        return view('add_brief');
    }

    public function submitbrief(Request $req)
    {
        $validateData = $req->validate([
            'nom_du_brief' => 'required',
            'Date_heure_livraison' => 'required',
            'Date_heure_recuperation' => 'required',
        ]);
        DB::table('briefs')->insert([
            'nom_du_brief' => $req->nom_du_brief,
            'Date_heure_livraison' => $req->Date_heure_livraison,
            'Date_heure_recuperation' => $req->Date_heure_recuperation,
        ]);
        return back()->with('Brief_created', 'Brief Has Been Created SuccessFully !!');
    }

    public function deleteBrief($id) {
        DB::table('briefs')->where('id', $id)->delete();
        return back()->with('brief_deleted', 'Brief Has Been Created SuccessFully !!');
    }

    public function updateBrief(Request $req, $id)
    {
        $validateData = $req->validate([
            'nom_du_brief' => 'required',
            'Date_heure_livraison' => 'required',
            'Date_heure_recuperation' => 'required',
        ]);
        DB::table('briefs')->where('id', $id)->update([
            'nom_du_brief' => $req->input('nom_du_brief'),
            'Date_heure_livraison' => $req->input('Date_heure_livraison'),
            'Date_heure_recuperation' => $req->input('Date_heure_recuperation')
        ]);
        return back()->with('brief_updated', 'Briefs Has Been Updated Successfully!!');
    }


}
