<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TierRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'starting' => ['required', 'numeric'],
            'cashback' => ['required', 'numeric'],
            'referral_reward' => ['required', 'numeric'],
            'specifications' => ['required', 'array'],
        ];
    }
}
