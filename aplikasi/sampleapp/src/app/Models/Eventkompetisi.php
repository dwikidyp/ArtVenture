<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventkompetisi extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'tag',
        'title',
        'date',
        'fee_registration'
    ];
}
