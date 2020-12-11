<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CounselingRequest extends FormRequest
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
            // 'nrp' => 'required|string',
            'counselee_contact' => 'required|string',
        ];
    }

    /*
     * Get custom attributes for validator errors.
     *
     * @return array
     */
}
