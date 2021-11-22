<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            //
            'judul' => ['required','string'],
            'isi'   => ['required','string'],
            'author'=> ['required','string'],
            'gambar'=> ['file', 'max:2048','nullable']
        ];
    }
}
