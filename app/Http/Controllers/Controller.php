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
    $contrat->credit_price = $request->input('creditprice');
    $contrat->desc = $request->input('desc');
    $contrat->daccord = $request->input('daccord');
    $contrat->condition = $request->input('condition');
    $contrat->save();

    return view('welcome')->with('message', 'yes');
}

function Add(){
    return view('contrat');
}
function Show(){
    return view('Show');
}
}
