<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class specificationRequest extends FormRequest
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
            'spec_name'=> 'required|max:60',
            'description'=>'required',
            'spec_img1'=> 'required|max:255',
        ];
    }
}
