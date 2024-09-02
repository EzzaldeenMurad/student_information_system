<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function exams(): HasMany
    {
        return $this->hasMany(Exam::class);
    }

    public static function getTotalStudents()
    {
        return self::count();
    }
}
