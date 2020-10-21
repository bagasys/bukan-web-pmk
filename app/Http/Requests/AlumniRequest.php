<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumniRequest extends FormRequest
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
            'username' => 'required|string',
            'department' => 'required|string',
            'job' => 'required|string',
            'sex' => 'required',
            'address' => 'required|string',
            'avatar' => 'required|string',
            'year_entry' => 'required',
            'year_exit' => 'required',
            'year_end' => 'required',
        ];
    }
}
