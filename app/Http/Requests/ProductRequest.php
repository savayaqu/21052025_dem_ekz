<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'product_type_id' => 'required|integer|exists:product_types,id',
            'name' => 'required|string|max:255',
            'article' => 'required|string|max:255',
            'minimum_price' => 'required|numeric|min:0',
        ];
    }
}
