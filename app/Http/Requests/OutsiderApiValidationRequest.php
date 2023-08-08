<?php

namespace App\Http\Requests;

use App\Http\Controllers\API\ResponseController;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class OutsiderApiValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'no_nik' => 'required',
            'no_kk' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kewarganegaraan' => 'required',
            'shdk' => 'required',
            'pendidikan' => 'required',
            'golongan_darah' => 'nullable',
            'golongan_darah' => 'nullable',
            'pekerjaan' => 'nullable',
            'status_akta_kelahiran' => 'nullable',
            'no_akta_kelahiran' => 'nullable',
            'ayah' => 'required',
            'nik_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'alamat_ayah' => 'required',
            'kewarganegaraan_ayah' => 'required',
            'umur_ayah' => 'required',
            'ibu' => 'required',
            'nik_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_ibu' => 'required',
            'kewarganegaraan_ibu' => 'required',
            'umur_ibu' => 'required',
            'status_perkawinan' => 'nullable',
            'status_akta_perkawinan' => 'nullable',
            'no_akta_perkawinan' => 'nullable',
        ];
    }

    function failedValidation(ValidationValidator $validator)
    {

        throw new HttpResponseException(ResponseController::create($validator->errors(), 'error', 'create outsider data failed', 200));
    }
}
