<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClaimRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'claim_mail' => 'required|email',
            'claim_title' => 'required',
            'claim_details' => 'required',
            // Add other validation rules for additional fields
        ];
    }
}
