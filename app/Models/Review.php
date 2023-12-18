<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'ulasan',
        'rating',
        'project_id'
    ];


    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
