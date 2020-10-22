<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name' => 'required|string',
            'nrp' => 'required|string',
            'current_address' => 'required|string',
            'origin_address' => 'required',
            'phone' => 'required',
            'department' => 'required',
            'birthdate' => 'required',
            'year_entry' => 'required',
            'sex' => 'required',
        ];
    }

    /*
     * Get custom attributes for validator errors.
     *
     * @return array
     */
}
