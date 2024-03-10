<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function TxId(Request $request)
    {
        $apiUrl = 'https://api.trongrid.io/wallet/gettransactionbyid';
        $txid = '56b09d0717a540e78db68caef1001e33fc304db75fe511e53b9a96bb93ae1499';
        $client = new Client();
        $response = $client->request('GET', $apiUrl, [
            'query' => [
                'value' => $txid
            ]
        ]);
        $data = json_decode($response->getBody(), true);
        dd($data);
    }
}
