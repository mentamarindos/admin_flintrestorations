<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'feedback' => ['required', 'string'],
            'stars' => ['required', 'integer'],
            'image' => [$this->method() === 'PUT' ? 'nullable' : 'required', 'image', 'mimes:png,jpg,jpeg,svg,webp'],
            'feedback_date' => ['required', 'date'],
            'show' => ['required', 'in:0,1'],
        ];
    }
}
