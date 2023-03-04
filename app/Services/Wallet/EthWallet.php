<?php

namespace App\Services\Wallet;

use App\Models\Wallet;
use InvalidArgumentException;

class EthWallet
{
    private Wallet $wallet;

    private function __construct(Wallet $wallet)
    {
        $this->wallet = $wallet;   
    }

    /**
     * Creates new instance of new ETH wallet
     * 
     * @return EthWallet
     */
    public static function create(): self
    {
        // TODO: creating a new ETH wallet
        $publicKey = '';
        $privateKey = '';

        $wallet = Wallet::create([
            'public_key' => $publicKey,
            'private_key' => $privateKey,
            'currency' => 'ETH',
        ]);

        return new self($wallet);
    }

    /**
     * Creates new instance of existed in DB ETH wallet
     * @param $publicKey public key of the existed in DB walllet
     * 
     * @throws InvalidArgumentException
     * 
     * @return EthWallet
     */
    public static function existed(string $publicKey): self
    {
        $existed = Wallet::where('public_key', $publicKey)->first();

        if (! $existed) {
            throw new InvalidArgumentException('Wallet with given public key does not exists!');
        }

        return new self($existed);
    }

    /**
     * Converts wallet fields into array
     * 
     * @return 
     */
    public function toArray(): array
    {
        return [
            'id' => $this->wallet->id,
            'currency' => $this->wallet->currency,
            'public_key' => $this->wallet->publicKey
        ];
    }
}
