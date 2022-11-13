<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Models\ApprenantBriefs;
use App\Models\Brief;
use App\Models\Promotion;
use Faker\Core\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprenantController extends Controller
{
    public function index()
    {
        return view('gestion_apprenant');
    }

    public function getApprenant($id)
    {
        $apprenant = Apprenant::where('id_promotion', $id)->paginate(4);
        $promotion = Promotion::where('id', $id)->first();
        return view('gestion_apprenant', compact('apprenant', 'promotion'));
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
        return back()->with('apprenant_created', 'Student Has Been Created SuccessFully !!');
    }

    public function deleteApprenant($id)
    {
        DB::table('apprenants')->where('id', $id)->delete();
        return back()->with('Apprenant_deleted', 'Student Has Been Created SuccessFully !!');
    }

    public function editApprenant($id)
    {
        $apprenantUp = Apprenant::where('id', $id)->first();
        return view('update_apprenant', compact('apprenantUp'));
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
        return back()->with('apprennat_updated', 'Student Has Been Updated Successfully');
    }
    public function searcha(Request $request)
    {
        if ($request->ajax()) {
            $input = $request->key;
            $output = "";
            $searchApprenant = Apprenant::where('nom', 'like', '%' . $input . "%")->get();
            if ($searchApprenant) {
                foreach ($searchApprenant as $apprenant) {
                    $output .= '<main class="d-flex justify-content-center align-items-center my-3"><a class="btn btn-success d-flex justify-content-center align-items-center">' . $apprenant->nom. " ". $apprenant->prenom . '</a>
                        <a href="/delete_promotion/{{$apprenant->id}}" class="text-danger m-3">' . 'Delete' . '</a></main>';
                }
                return Response($output);
            }
        }
    }
}
