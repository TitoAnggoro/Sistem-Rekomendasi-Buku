<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subjects extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'subyek_1', 'subyek_2', 'foto_subyek'
    ];

    protected $hidden = [
        
    ];

}
