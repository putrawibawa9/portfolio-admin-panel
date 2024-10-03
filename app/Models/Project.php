<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'url',
        'repository_link',
        'thumbnail',
    ];
     public function techStacks()
    {
        return $this->hasMany(TechStack::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

}
