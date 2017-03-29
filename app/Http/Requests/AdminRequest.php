<?php

namespace laravel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'nama'           => 'required|max:255',
            'email'          => 'required|email|unique:posts|max:255',
            'password'       => 'required|max:255',
            'password_confirm' => 'required|same:password'
        ];
    }

         public function messages()
    {
        return [
            'required'  => 'Kolom nama harus di isi',
            'email'    => 'Penulisan Email tidak sesuai'
            'unique'    => 'Email SUdah Terdaftar',
            'same'  => 'Kolom Password TIdak Sama'
        ];
    }
}
