<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // CRUD
    public function index()
    {
        $data = Transaction::get();
        return response()->json(['data' => $data]);
    }
    //!    
    public function store(Request $request)
    {
        $data = $request->all();
        Transaction::create([
            'trasnaction_number' => $data['trasnaction_number'],
            'amount' => $data['amount'],
        ]);
        return response()->json(['message' => 'Record successfully created']);
    }
    //!
    public function show(Transaction $transaction)
    {
        return response()->json(['data' => $transaction]);
    }
    //!
    public function update(Transaction $transaction, Request $request)
    {
        $transaction->update($request->all());
        return response()->json(['message' => 'updated record']);
    }
    //!
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return response()->json(['message' => 'Deleted record']);
    }
}
