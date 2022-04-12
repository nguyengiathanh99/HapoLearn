<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'reg_username' => 'required',
            'email' => 'required',
            'reg_password' => 'required|min:5',
            'password_confirmation' => 'required|same:reg_password'
        ];
    }

    public function messages()
    {
        return [
            'reg_username.required' => 'Register password is required',
            'email' => 'Email is required',
            'reg_password' => 'Register password is required',
            'reg_password.min' => 'Register password is too short',
            'password_confirmation' => 'Confirm-password is required',
            'password_confirmation.same' => 'Passwords do not match',
        ];
    }
}
