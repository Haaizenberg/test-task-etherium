<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Wallet;
use App\Services\Wallet\EthWallet;
use App\Services\Wallet\TransactionService;
use Illuminate\Http\JsonResponse;

class WalletController extends Controller
{
    public function createWallet(): JsonResponse
    {
        $ethWallet = EthWallet::create();

        return response()->json(
            $ethWallet->toArray()
        );
    }

    public function walletsList()
    {
        return Wallet::all([
            'id',
            'currency',
            'public_key',
            'balance',
        ]);
    }

    public function transaction(TransactionRequest $request)
    {
        $fields = $request->validated();

        $from = EthWallet::existed($fields['from']);
        $to = EthWallet::existed($fields['to']);
        
        TransactionService::make($from, $to, $fields['amount']);
    }
}
