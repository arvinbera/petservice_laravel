<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            'mobile' => 'required|numeric',
            'password' => 'required|string',
            'device_os' => 'required|string|min:6',
            'device_type' => 'required|string|min:6',
            'device_token' => 'required|string|min:6',
            'device_name' => 'required|string',
        ];
    }
}
