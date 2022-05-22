<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentMethodRequest extends FormRequest
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
            'payment_method' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Vui lòng chọn :attribute',
        ];
    }

    public function attributes()
    {
        return [
            'payment_method' => 'phương thức thanh toán'
        ];
    }
}
