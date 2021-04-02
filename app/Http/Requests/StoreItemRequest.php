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
}
