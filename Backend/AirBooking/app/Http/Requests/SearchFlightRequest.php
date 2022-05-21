<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchFlightRequest extends FormRequest
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
            'inputFromText' => 'required',
            'inputFromID' => 'required',
            'inputToText' => 'required',
            'inputToID' => 'required',
            'dateFromInput' => 'required',
            'adultInput' => 'required|min:1',
            'childrenInput' => 'numeric|min:0',
            'infantInput' => 'numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Vui lòng chọn :attribute!',
            'numeric' => ':attribute phải là số!',
            'min' => ':attribute tối thiểu phải là :min!',
        ];
    }

    public function attributes()
    {
        return [
            'inputFromText' => 'Điểm đi',
            'inputFromID' => 'Điểm đi',
            'inputToText' => 'Điểm đến',
            'inputToID' => 'Điểm đến',
            'dateFromInput' => 'Ngày đi',
            'adultInput' => 'Người lớn',
            'childrenInput' => 'Trẻ em',
            'infantInput' => 'Em bé',
        ];
    }
}