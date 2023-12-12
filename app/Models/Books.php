<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Books extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nomor_induk', 'subjects_id', 'judul_buku', 'pengarang_1', 'pengarang_2', 'pengarang_3', 'sinopsis', 'subyek_1',
        'subyek_2', 'bahasa', 'isbn', 'jumlah', 'penerbit', 'jenis_koleksi', 'status', 'status_koleksi'
    ];

    protected $hidden = [];

    public function subject()
    {
        return $this->belongsTo(Subjects::class, 'subjects_id', 'id');
    }

    public function covers()
    {
        return $this->hasMany(Covers::class, 'books_id', 'id');
    }

    public function getdatastockbook()
    {
        return $this->belongsTo(Circulations::class, 'circulations_id', 'id');
    }
}
