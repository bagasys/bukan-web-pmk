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
            'department' => 'required',
            'year_entry' => 'required',
            'avatar' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    /*
     * Get custom attributes for validator errors.
     *
     * @return array
     */
}
