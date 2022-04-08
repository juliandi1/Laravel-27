<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $id = ($this->user) ? $this->user->id : '';
        return [
            'name' => 'required',
            'email' => 'required|email|',
            'google_id' => 'required',
            'avatar' => 'required'
        ];
    }
}
