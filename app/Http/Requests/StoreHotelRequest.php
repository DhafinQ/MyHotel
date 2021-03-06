<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHotelRequest extends FormRequest
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
            'name' => 'required',
            'review' => 'required|numeric|max:5',
            'bill' => 'required|numeric',
            'description' => 'required',
            'address' => 'required',
            'image' => 'required|image',
            'services' => 'required',
        ];
    }
}
