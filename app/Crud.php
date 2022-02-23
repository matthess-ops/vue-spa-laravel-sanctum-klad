<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Crud extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname', 'lastname'
    ];

}
