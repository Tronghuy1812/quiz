<?php

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response ;

class UserStoreRequest extends FormRequest
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
            'name' => ['required','min:3'],
            'email'=> ['required'],
            'phone'=> ['required','numeric'],
            'address'=> ['required'],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
                'status' => false,
                'code'  => Response::HTTP_UNPROCESSABLE_ENTITY,
                'messages' => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'name.required' => 'Nhap vao ho va ten',
            'email.required' => 'Nhap vao email',
        ];
    }
}
