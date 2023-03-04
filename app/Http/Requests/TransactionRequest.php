<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TransactionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'from' => [ 'required', 'string', 'max:255', 'exists:App\Models\Wallet,public_key' ],
            'to' => [ 'required', 'string', 'max:255', 'exists:App\Models\Wallet,public_key' ],
            'currency' => [ 'required', 'alpha', Rule::in(['ETH']) ],
            'amount' => [ 'required', 'numeric', 'gt:0' ],
        ];
    }
}
