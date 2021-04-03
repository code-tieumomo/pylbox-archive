<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'title' => 'required',
            'box_id' => 'required',
            'image' => 'required',
            'source' => 'required',
            'source_link' => 'required',
            'sumary' => 'required',
            'detail' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'The Title filed is required !',
            'box_id.required' => 'Please pick a box !',
            'image.required' => 'The Image filed is required !',
            'source.required' => 'The Source filed is required !',
            'source_link.required' => 'The Source Link filed is required !',
            'sumary.required' => 'The Sumary filed is required !',
            'detail.required' => 'The Detail filed is required !',
        ];
    }
}
