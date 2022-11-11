<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ApprenantBriefs;
use App\Models\Brief;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprenantBriefsController extends Controller
{
    public function index($id)
    {
        $infos = DB::table('apprenants')->get();
        $brieff = Brief::find($id);
        return view('assigner', compact('infos','brieff'));
    }
    public function store(Request $request)
    {
        $apprenatBrief = new ApprenantBriefs();
        $apprenatBrief->apprenant_id = $request->apprenant_id;
        $apprenatBrief->brief_id = $request->brief_id;
        $apprenatBrief->save();
        return back();
    }

    public function destroy($id)
    {
        $apprenatBrief = ApprenantBriefs::find($id);
        $apprenatBrief->delete();
        return back();
    }
}
