<?php

namespace App\Http\Requests;

use App\Http\Controllers\API\ResponseController;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreApiValidationRequest extends FormRequest
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
            'item_name' => 'required' ,
            'user_phone_number' =>'required',
            'item_category_id' => 'required',
            'item_price' => 'required',
            'item_description' => 'required',
            'item_marketplace_link' => 'nullable',
            'item_image' => 'required'
        ];
    }

    function failedValidation(Validator $validator)
    {

        throw new HttpResponseException(ResponseController::create($validator->errors(), 'error', 'create umkm data failed', 400));
    }
}
