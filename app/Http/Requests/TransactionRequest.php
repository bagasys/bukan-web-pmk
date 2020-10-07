<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
        $rules = [
            'sender_name' => 'required|string',
            'sender_account' => 'required|string',
            'receiver_account' => 'required|string',
            'send_date' => 'required|string',
            'wallet' => 'required|string',
            'status' => 'required|string',
            'verified_by' => 'nullable|string',
            'verified_date' => 'nullable|string',
            'amount' => 'required|numeric',
            'note' => 'required|string',
        ];
        if(!$this->has('id')){
            $rules['proof'] = 'required|mimes:jpg,jpeg,png|max:2048';
        }
        return $rules;
    }
}
