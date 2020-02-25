<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:1|max:255',
            'short_description' => 'required|string|min:1|max:255',
            'full_description' => 'required|min:1|max:65000',
            'price' => 'required|numeric|min:0.01',
            'balance' => 'required|integer|min:1',
        ];
    }
}
