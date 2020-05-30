<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // CHECK
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        public function rules()
        {
            return [
                'name' => ['required', 'string'],
                'email' => ['required', 'string'],
                'role' => ['required', 'string']
            ];
        }
    }
}
