<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Http\Controllers\API\ResponseController;

class ChangePasswordRequest extends FormRequest
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
            'password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required'
        ];
    }

    function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(ResponseController::create($validator->errors(), 'error', 'request failed', 400));
    }
}
