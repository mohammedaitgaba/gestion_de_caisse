<?php

namespace App\Http\Controllers;
use App\Models\Transactions;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = Transactions::all();
        foreach ($transactions as $transaction) {
            if($transaction->type === 'recette'){
                $transaction->transaction_amount = '+'.$transaction->transaction_amount;
            }else $transaction->transaction_amount = '-'.$transaction->transaction_amount;
        }
        return view('dushboard', compact('transactions'));
    }

    public function add()
    {
        
        return view('add_transaction');
    }


    public function store(Request $request){

        $this->validate($request,[
            'montant' => 'required',
            'caisse' => 'required',
            'date' => 'required',
            'libelle' => 'required',
        ]);

        $last_transaction = Transactions::orderBy('id', 'desc')->first();
        $balance = $last_transaction->solde;
        if(request('caisse') === 'depense' && $balance < request('montant')){
            return redirect()->back()->withErrors(['Le montant est supérieur au solde de la caisse']);

        }

        $balance = (request('caisse') === 'depense') ? $balance - request('montant') : $balance + request('montant');


        $transaction = new Transactions();
        $transaction->caisse = request('montant');
        $transaction->caisse_type = request('caisse');
        $transaction->libelle = request('libelle');
        $transaction->date = request('date');
        $transaction->solde = $balance;
        $transaction->save();

        return redirect()->route('dushboard')->with('message', 'Transaction ajoutée avec succès');
    }

    public function delete(Transactions $transaction)
    {
        $transaction->delete();
        return redirect()->route('dushboard')->with('message', 'Transaction supprimée avec succès');
    }

}
