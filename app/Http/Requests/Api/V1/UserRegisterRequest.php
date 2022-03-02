<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'mobile' => 'required|numeric|unique:App\Models\User,mobile',
            'address' => 'required|string',
            'postcode' => 'required|string',
            'shop_name' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|string',
            'latitude' => 'required',
            'longitude' => 'required',
        ];

        if ($this->attributes->get('email')) {
            $rules['email'] = 'email|max:255|unique:App\Models\User,email';
        }

        return $rules;
    }
}
