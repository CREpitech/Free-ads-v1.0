<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdStore extends FormRequest
{
    /*
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /*
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'upload_img' => ['required'],
            'title' => ['required', 'unique:ads'],
            'description' => ['required'],
            'category_id' => ['required'],
            'localisation' => ['required'],
            'price' => ['required', 'integer'],
        ];
    }
}
