<?php

namespace Tutorial\Http\Requests\crud;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'nama'=>'Required',
            'kelas'=>'Required',
            'jurusan'=>'Required',
            'alamat'=>'Required'
            
            //
        ];
    }

     public function messages()
    {
        return [
            'nama.required' => 'Nama Tidak Boleh Kosong.',
            'kelas.required' => 'Kelas Tidak Boleh Kosong.',
            'jurusan.required' => 'jurusan Lahir Tidak Boleh Kosong.',
            'alamat.required' => 'Alamat Tidak Boleh Kosong.'
              
        ];
    }
}
