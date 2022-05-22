<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'customerGender' => 'required',
            'customerName' => 'required',
            'contactGender' => 'required',
            'contactName' => 'required',
            'contactPhone' => 'required|min:10',
            'contactEmail' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute tối thiểu :min ký tự',
            'email' => ':attribute sai định dạng',
        ];
    }

    public function attributes()
    {
        return [
            'customerGender' => 'Giới tính',
            'customerName' => 'Họ tên',
            'contactGender' => 'Giới tính',
            'contactName' => 'Họ tên',
            'contactPhone' => 'Số điện thoại',
            'contactEmail' => 'Email',
        ];
    }
}
