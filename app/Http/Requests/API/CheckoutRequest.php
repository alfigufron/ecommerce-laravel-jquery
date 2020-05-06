<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|max:255',
        'address' => 'required',
        'transtotal' => 'required|integer',
        'product_id' => 'required|array',
        'product_id.*' => 'integer',
        'quantity' => 'required|array',
        'quantity.*' => 'integer',
      ];
    }
}
