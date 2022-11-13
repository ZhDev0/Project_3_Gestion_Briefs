<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    public function index()
    {
        return view('gestion_promotions');
    }

    public function getPromotions()
    {
        $promotion = Promotion::paginate(5);
        return view('gestion_promotions', compact('promotion'));
    }

    public function addPromotion()
    {
        return view('add_promotion');
    }

    public function submitPromotion(Request $req)
    {
        $validateData = $req->validate([
            'nom_promotion' => 'required'
        ]);
        DB::table('promotions')->insert([
            'nom_promotion' => $req->nom_promotion
        ]);
        return back()->with('promotion_created', 'Promotion Has Been Created SuccessFully !!');
    }

    public function deletePromotion($id)
    {
        DB::table('promotions')->where('id', $id)->delete();
        return back()->with('promotion_deleted', 'Promotion Has Been Created SuccessFully !!');
    }
    public function editPromotion($id)
    {
        $editpromotion = Promotion::where('id', $id)->first();
        return view('edit_promotion', compact('editpromotion'));
    }

    public function updatePromotion(Request $req, $id)
    {
        $validateData = $req->validate([
            'nom_promotion' => 'required'
        ]);
        DB::table('promotions')->where('id', $id)->update([
            'nom_promotion' => $req->input('nom_promotion'),
        ]);
        return back()->with('promotion_updated', 'Promotion Has Been Updated Successfully');
    }


    public function search(Request $request)
    {
        if ($request->ajax()) {
            $input = $request->key;
            $output = "";
            $searchPromotion = Promotion::where('nom_promotion', 'like', '%' . $input . "%")->get();
            if ($searchPromotion) {
                foreach ($searchPromotion as $promotion) {
                    $output .= '<main class="d-flex justify-content-center align-items-center my-3"><a class="btn btn-success d-flex justify-content-center align-items-center">' . $promotion->nom_promotion . '</a>
                        <a href="/delete_promotion/{{$promotion->id}}" class="text-danger m-3">' . 'Delete' . '</a>
                        <a href="/edit_promotion/{{ $value->id }}" class="text-success">'.'Update'.'</a>
                        '.'</main>';
                }
                return Response($output);
            }
        }
    }
}
