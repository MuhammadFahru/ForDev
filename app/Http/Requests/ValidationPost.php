<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationPost extends FormRequest
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
            'thumbnail' => 'mimes:jpeg,png|max:1014',
            'judul' => 'required|min:3',
            'konten' => 'required|min:10',
            'category' => 'required',
            'tags' => 'required|array'
        ];
    }
}
