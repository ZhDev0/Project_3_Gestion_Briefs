<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ApprenantBriefs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprenantBriefsController extends Controller
{
    public function index() {
        $infos = DB::table('apprenants')->get();
        return view('assigner', compact('infos'));
    }
    public function indexbrief() {
        
    }
    public function store(Request $request)
    {
        $apprenatBrief = new ApprenantBriefs();
        $apprenatBrief->apprenant_id = $request->apprenant_id;
        $apprenatBrief->briefs_id = $request->brief_id;
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
