<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covers extends Model
{
        protected $fillable = [
        'foto_cover', 'books_id'
    ];

    protected $hidden = [

    ];

        public function books(){
        return $this->belongsTo(Books::class, 'books_id', 'id');
    }

}
