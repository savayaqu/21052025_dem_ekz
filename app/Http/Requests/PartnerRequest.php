<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'director' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'rating' => 'required|integer|min:1|max:10',
            'partner_type_id' => 'integer|exists:partner_types,id',
        ];
    }
}
