<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = ['name', 'class', 'bio', 'mark'];

    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
}
