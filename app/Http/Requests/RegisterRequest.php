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
            'username_reg' => 'required',
            'email' => 'required',
            'password_reg' => 'required|min:5',
            'password_confirmation' => 'required|same:password_reg'
        ];
    }

    public function messages()
    {
        return [
            'username_reg.required' => 'username_reg is required',
            'email' => 'Email is required',
            'password' => 'Password is required',
            'password_reg.min' => 'Password is too short',
            'password_confirmation' => 'Confirm-password is required',
            'password_confirmation.same' => 'Passwords do not match',
        ];
    }
}
