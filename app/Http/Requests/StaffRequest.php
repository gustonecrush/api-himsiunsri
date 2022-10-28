<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StaffRequest extends FormRequest
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
            "name" => "required|string",
            "nim" => "required|unique:staff",
            "dinas_id" => "required|integer",
            "divisi_id" => "required|integer",
            "ttl" => "required|string",
            "gender" => "required",
            "alamat" => "required",
            "jabatan" => "required",
            "hobi" => "required",
            "email" => "required",
            "periode" => "required",
            "instagram" => "required",
            "kesan_pesan" => "required",
            "angkatan" => "required",
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'code' => 404,
                'success' => false,
                'message' => 'Validation Error',
                'error' => $validator->errors(),
            ])
        );
    }
    
}
