<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Contrat;
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

public function Edit($id) {
    $data = Contrat::find($id);
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
}
