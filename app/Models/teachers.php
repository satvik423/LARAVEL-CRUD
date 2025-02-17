<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    protected $fillable = ['name', 'subject', 'bio', 'branch_id'];

    /** @use HasFactory<\Database\Factories\TeachersFactory> */
    use HasFactory;

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
