<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BooksRequest extends FormRequest
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
        'nomor_induk'  => 'required | string',
        'subjects_id' => 'required|exists:subjects,id',
        'judul_buku' => 'required | string',
        'pengarang_1' => 'required | string',
        'pengarang_2',
        'pengarang_3',
        'sinopsis' => 'required | string',
        'subyek_1', 
        'subyek_2' ,
        'bahasa',
        'isbn', 
        'jumlah', 
        'penerbit',
        'jenis_koleksi',
        'status',
        'status_koleksi'
        ];
    }
}
