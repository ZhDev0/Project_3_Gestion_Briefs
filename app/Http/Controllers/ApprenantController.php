<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use Faker\Core\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprenantController extends Controller
{
    public function index() {
        return view('gestion_apprenant');
    }

    public function getApprenant($id)
    {
        $apprenant = Apprenant::where('id_promotion',$id)->paginate(4);
        return view('gestion_apprenant', compact('apprenant'));
    }

    public function addApprenant()
    {
        return view('add_apprenant');
    }

    public function submitApprenant(Request $req)
    {
        $validateData = $req->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required | email',
            'id_promotion' => 'required',
        ]);
        DB::table('apprenants')->insert([
            'prenom' => $req->prenom,
            'nom' => $req->nom,
            'email' => $req->email,
            'id_promotion' => $req->id_promotion,
        ]);
        return back()->with('apprenant_created', 'Apprenant Has Been Created SuccessFully !!');
    }

    public function deleteApprenant($id) {
        DB::table('apprenants')->where('id', $id)->delete();
        return back()->with('Apprenant_deleted', 'Apprenant Has Been Created SuccessFully !!');
    }

    public function editApprenant() {
        return view('');
    }
    public function updateApprenant(Request $req, $id)
    {
        $validateData = $req->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'email' => 'required | email',
            'id_promotion' => 'required',
        ]);
        DB::table('apprenants')->where('id', $id)->update([
            'prenom' => $req->input('prenom'),
            'nom' => $req->input('nom'),
            'email' => $req->input('email'),
            'id_promotion' => $req->input('id_promotion'),
        ]);
        return back()->with('promo_updated', 'Promotion Has Been Updated Successfully');
    }
}
