<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRequest extends FormRequest
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
            'emp_name' => 'required',
            'emp_surname' => 'required',
            'emp_email' => 'email:rfc,dns|required'
        ];
    }

    public function messages(){
        return [
            'emp_name.required' => 'An employee\'s name is required.',
            'emp_surname.required' => 'An employee\'s surname is required.',
            'emp_email.required' => 'An employee\'s email is required.',
            'emp_email.email:rfc,dns' => 'An employee\'s email must be correct.'
        ];
    }
}
