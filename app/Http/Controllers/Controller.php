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
        return view('welcome')->with('sumofprice',$sumofprice)->with('sumofcontrat',$sumofcontrat);
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
    return view('Show')->with('contrats',$contrats);
}
function Delete($id){
    $contrat = Contrat::find($id);
    $contrat->delete();
    return redirect()->back()->with('message', 'تم الحدف بنجاح');
}
}
