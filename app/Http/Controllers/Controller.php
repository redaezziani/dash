<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Contrat;
use App\Models\Facture;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function welcome(){
        $sumofprice = Contrat::sum('full_price');
        $sumofcontrat= Contrat::count();
        $contrats = Contrat::latest()->take(3)->get();
        return view('welcome')->with('sumofprice',$sumofprice)->with('sumofcontrat',$sumofcontrat)->with('contrats',$contrats);
    }
    public function store(Request $request)

{
    $contrat = new Contrat;
    $contrat->nom = $request->input('nom');
    $contrat->adress = $request->input('adress');
    $contrat->date = $request->input('date');
    $contrat->num_contrat = $request->input('num_contrat');
    $contrat->full_price = $request->input('full_price');
    $contrat->done_price = $request->input('done_price');
    $contrat->credit = $request->input('credit');
    $contrat->credit_price = $request->input('credit_price');
    $contrat->desc = $request->input('desc');
    $contrat->daccord = $request->input('daccord');
    $contrat->condition = $request->input('condition');
    $contrat->save();

    return redirect()->back()->with('message', 'azerty');
}

function Add(){
    $count = Contrat::max('num_contrat');
    return view('contrat')->with('count',$count);
}
function Show(){
    $contrats = Contrat::all();
    $count = Contrat::count();
    return view('Show')->with('contrats',$contrats)->with('count',$count);
}
function Delete($id){
    $contrat = Contrat::find($id);
    $contrat->delete();
    return redirect()->back()->with('message', 'تم الحدف بنجاح');
}
function DeleteFacture($id){
    $contrat = Facture::find($id);
    $contrat->delete();
    return redirect()->back()->with('message', 'تم الحدف بنجاح');
}

public function Edit($id) {
    $data = Contrat::find($id);
    return response()->json([
        'status'=>200,
        'data'=>$data,
    ]);
}
public function facturemodal($id) {
    $data = Facture::find($id);
    return response()->json([
        'status'=>200,
        'data'=>$data,
    ]);
}

function Up(Request $request){
    $contrat_id = $request->input('contrat_id');
    $contrat =Contrat::find($contrat_id);
    $contrat->nom = $request->input('nom');
    $contrat->adress = $request->input('adress');
    $contrat->date = $request->input('date');
    $contrat->num_contrat = $request->input('num_contrat');
    $contrat->full_price = $request->input('full_price');
    $contrat->done_price = $request->input('done_price');
    $contrat->credit = $request->input('credit');
    $contrat->credit_price = $request->input('credit_price');
    $contrat->desc = $request->input('desc');
    $contrat->daccord = $request->input('daccord');
    $contrat->condition = $request->input('condition');
    $contrat->update();

    return redirect()->back()->with('message', 'azerty');
}
function UpFacture(Request $request){
    $facture_id = $request->input('facture_id');
    $facture =Facture::find($facture_id);
    $facture->nom = $request->input('nom');
    $facture->adress = $request->input('adress');
    $facture->date = $request->input('date');
    $facture->phone = $request->input('phone');
    $facture->full_price = $request->input('full_price');
    $facture->done_price = $request->input('done_price');
    $facture->credit_price = $request->input('credit_price');
    $facture->ident = $request->input('ident');
    $facture->desc = $request->input('desc');
    $facture->desc_facture_1 = $request->input('desc_facture_1');
    $facture->qte_1 = $request->input('qte_1');
    $facture->price_qte_1 = $request->input('price_qte_1');
    $facture->total_qte_1 = $request->input('total_qte_1');

    // Add the next 8 fields following the same pattern
    $facture->desc_facture_2 = $request->input('desc_facture_2');
    $facture->qte_2 = $request->input('qte_2');
    $facture->price_qte_2 = $request->input('price_qte_2');
    $facture->total_qte_2 = $request->input('total_qte_2');

    $facture->desc_facture_3 = $request->input('desc_facture_3');
    $facture->qte_3 = $request->input('qte_3');
    $facture->price_qte_3 = $request->input('price_qte_3');
    $facture->total_qte_3 = $request->input('total_qte_3');

    $facture->desc_facture_4 = $request->input('desc_facture_4');
    $facture->qte_4 = $request->input('qte_4');
    $facture->price_qte_4 = $request->input('price_qte_4');
    $facture->total_qte_4 = $request->input('total_qte_4');

    $facture->desc_facture_5 = $request->input('desc_facture_5');
    $facture->qte_5 = $request->input('qte_5');
    $facture->price_qte_5 = $request->input('price_qte_5');
    $facture->total_qte_5 = $request->input('total_qte_5');

    $facture->desc_facture_6 = $request->input('desc_facture_6');
    $facture->qte_6 = $request->input('qte_6');
    $facture->price_qte_6 = $request->input('price_qte_6');
    $facture->total_qte_6 = $request->input('total_qte_6');

    $facture->desc_facture_7 = $request->input('desc_facture_7');
    $facture->qte_7 = $request->input('qte_7');
    $facture->price_qte_7 = $request->input('price_qte_7');
    $facture->total_qte_7 = $request->input('total_qte_7');

    $facture->desc_facture_8 = $request->input('desc_facture_8');
    $facture->qte_8 = $request->input('qte_8');
    $facture->price_qte_8 = $request->input('price_qte_8');
    $facture->total_qte_8 = $request->input('total_qte_8');

    $facture->desc_facture_9 = $request->input('desc_facture_9');
    $facture->qte_9 = $request->input('qte_9');
    $facture->price_qte_9 = $request->input('price_qte_9');
    $facture->total_qte_9 = $request->input('total_qte_9');
    $facture->update();

    return redirect()->back()->with('message', 'azerty');
}
    function AddFacture(){
        return view('Facture');
    }
    public function storeFacture(Request $request)

    {
        $facture = new Facture;

        $facture->nom = $request->input('nom');
        $facture->adress = $request->input('adress');
        $facture->date = $request->input('date');
        $facture->phone = $request->input('phone');
        $facture->full_price = $request->input('full_price');
        $facture->done_price = $request->input('done_price');
        $facture->credit_price = $request->input('credit_price');
        $facture->ident = $request->input('ident');
        $facture->desc = $request->input('desc');
        $facture->desc_facture_1 = $request->input('desc_facture_1');
        $facture->qte_1 = $request->input('qte_1');
        $facture->price_qte_1 = $request->input('price_qte_1');
        $facture->total_qte_1 = $request->input('total_qte_1');

        // Add the next 8 fields following the same pattern
        $facture->desc_facture_2 = $request->input('desc_facture_2');
        $facture->qte_2 = $request->input('qte_2');
        $facture->price_qte_2 = $request->input('price_qte_2');
        $facture->total_qte_2 = $request->input('total_qte_2');

        $facture->desc_facture_3 = $request->input('desc_facture_3');
        $facture->qte_3 = $request->input('qte_3');
        $facture->price_qte_3 = $request->input('price_qte_3');
        $facture->total_qte_3 = $request->input('total_qte_3');

        $facture->desc_facture_4 = $request->input('desc_facture_4');
        $facture->qte_4 = $request->input('qte_4');
        $facture->price_qte_4 = $request->input('price_qte_4');
        $facture->total_qte_4 = $request->input('total_qte_4');

        $facture->desc_facture_5 = $request->input('desc_facture_5');
        $facture->qte_5 = $request->input('qte_5');
        $facture->price_qte_5 = $request->input('price_qte_5');
        $facture->total_qte_5 = $request->input('total_qte_5');

        $facture->desc_facture_6 = $request->input('desc_facture_6');
        $facture->qte_6 = $request->input('qte_6');
        $facture->price_qte_6 = $request->input('price_qte_6');
        $facture->total_qte_6 = $request->input('total_qte_6');

        $facture->desc_facture_7 = $request->input('desc_facture_7');
        $facture->qte_7 = $request->input('qte_7');
        $facture->price_qte_7 = $request->input('price_qte_7');
        $facture->total_qte_7 = $request->input('total_qte_7');

        $facture->desc_facture_8 = $request->input('desc_facture_8');
        $facture->qte_8 = $request->input('qte_8');
        $facture->price_qte_8 = $request->input('price_qte_8');
        $facture->total_qte_8 = $request->input('total_qte_8');

        $facture->desc_facture_9 = $request->input('desc_facture_9');
        $facture->qte_9 = $request->input('qte_9');
        $facture->price_qte_9 = $request->input('price_qte_9');
        $facture->total_qte_9 = $request->input('total_qte_9');

        $facture->save();

        return redirect()->back()->with('message', 'azerty');
    }
    function ShowFacture(){
        $factures=Facture::all();
        return view('Show_facture')->with('factures', $factures);
    }
}
