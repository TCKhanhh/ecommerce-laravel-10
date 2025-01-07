<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|email|max:255|unique:users',
            'fullname' => 'required|string|max:255',
            'user_catalogue_id' => 'required|integer|gt:0',
            'password' => 'required|min:6|max:255|regex:/^[a-zA-Z0-9!@#$%^&*()_+]*$/',
            're_password' => 'required|same:password|min:6|max:255|regex:/^[a-zA-Z0-9!@#$%^&*()_+]*$/',
        ];
    }
    public function messages(): array
    {
        return [
            // Email
            'email.required' => 'Bạn chưa nhập email.',
            'email.email' => 'Email chưa đúng định dạng.',
            'email.max' => 'Email không được vượt quá 255 ký tự.',
            'email.unique' => 'Email đã tồn tại.',
            'email.string' => 'Email phải là chuỗi ký tự.',

            // Password
            'password.required' => 'Bạn chưa nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.max' => 'Mật khẩu không được vượt quá 50 ký tự.',
            'password.regex' => 'Mật khẩu chỉ chứa chữ, số và ký tự đặc biệt hợp lệ.',
            
            // Re-password
            're_password.required' => 'Bạn chưa nhập lại mật khẩu.',
            're_password.same' => 'Mật khẩu nhập lại không khớp.',
            're_password.min' => 'Mật khẩu nhập lại phải có ít nhất 6 ký tự.',
            're_password.max' => 'Mật khẩu nhập lại không được vượt quá 255 ký tự.',
            're_password.regex' => 'Mật khẩu nhập lại chỉ chứa chữ, số và ký tự đặc biệt hợp lệ.',

            // Fullname
            'fullname.required' => 'Bạn chưa nhập họ tên.',
            'fullname.string' => 'Họ tên phải là chuỗi ký tự.',
            'fullname.max' => 'Họ tên không được vượt quá 255 ký tự.',

            // User Catalogue ID
            'user_catalogue_id.required' => 'Bạn chưa chọn nhóm thành viên.',
            'user_catalogue_id.integer' => 'Nhóm thành viên không hợp lệ.',
            'user_catalogue_id.gt' => 'Nhóm thành viên không hợp lệ.'        ];
    }
}