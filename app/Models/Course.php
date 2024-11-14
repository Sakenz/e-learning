<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public $timestamps = false;

    public function pages()
    {
        return $this->hasMany(CoursePage::class)->orderBy('page_number');
    }

}
