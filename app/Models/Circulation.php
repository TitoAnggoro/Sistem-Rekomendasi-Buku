<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circulation extends Model
{
    protected $fillable = [
        'nim', 'nomor_induk', 'jenis_koleksi', 'tgl_pinjam', 'tgl_kembali_1'
        , 'tgl_kembali_2', 'sts_wajib', 'sts_wajib_kbl'
    ];

    protected $hidden = [

    ];

    public function books()
    {
        return $this->belongsTo(Books::class, 'books_id', 'id');
    }
    
}
