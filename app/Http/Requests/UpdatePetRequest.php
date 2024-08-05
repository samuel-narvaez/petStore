<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdatePetRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'         => 'required',
            'status'       => 'required',
            'category_id'  => 'required|exists:category,id',
            'tags_id'      => 'required|exists:tag,id',
            'photos'       => 'nullable|array',
            'photos.*'     => 'url'
        ];
    }

    public function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => 'Validation Error!',
            'errors'  => $validator->errors()
        ]));
    }
}
