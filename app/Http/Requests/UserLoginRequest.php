<?php

namespace App\Http\Requests;

use App\Http\Controllers\API\ResponseController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nik' => 'required',
            'password' => 'required'
        ];
    }

    function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(ResponseController::create($validator->errors(), 'error', 'login failed', 401));
    }

    
}
