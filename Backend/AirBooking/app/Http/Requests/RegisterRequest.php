<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest as LaravelFormRequest;

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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'email' => ':attribute sai định dạng',
            'unique' => ':attribute đã tồn tại',
            'min' => ':attribute tối thiểu :min ký tự',
        ];
    }

    public function attributes()
    {
        return [
            'fullname' => 'Họ tên',
            'email' => 'Email',
            'password' => 'Mật khẩu',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if ($this->ajax()) {
            $response = response()->json([
                'status' => 403,
                'msg' => $validator->errors()->first()
            ]);
        } else {
            $response = response()->json([
                'status' => 403,
                'msg' => 'Đã có lỗi xảy ra, vui lòng thử lại!'
            ]);
        }

        throw (new ValidationException($validator, $response))
            ->errorBag($this->errorBag)
            ->redirectTo($this->getRedirectUrl());
    }
}
