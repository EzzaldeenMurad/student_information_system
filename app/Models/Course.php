<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
    public function teatcher(): BelongsTo
    {
        return $this->belongsTo(Teatcher::class);
    }

    public function exams(): HasMany
    {
        return $this->hasMany(Exam::class);
    }

    public static function getTotalCourses()
    {
        return self::count();
    }
}
