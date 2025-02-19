<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = ['name', 'class', 'bio', 'mark', 'branch_id', 'status'];

    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
