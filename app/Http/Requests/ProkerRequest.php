<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProkerRequest extends FormRequest
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
            'name' => 'required|string',
            'date' => 'required|date|date_format:Y-m-d',
            'target_audience' => 'required|string',
            'description' => 'required',
            'periode' => 'required|integer',
            'status_proker' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'date.date_format' => "The date's format must be YYYY-mm-dd",
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
