<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'postal_code' => 'required|size:8',
            'address' => 'required',
            'building' => 'required',
        ];
    }

    public function messages(){
        return[
            'postal_code.required' => '郵便番号を入力してください',
            'postal_code.size' => '郵便番号はハイフン含め半角8文字で入力してください',
            'address.required' => '住所を入力してください',
            'building.required' => '建物名を入力してください',
        ];
    }

}
