<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhoneRequest extends FormRequest
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
        $id = ($this->phone) ? $this->phone->id : '';
        return [
            'number' => 'required|unique:phones,number,' . $id,
            'provider_id' => 'required|integer|exists:providers,id'
        ];
    }
}
