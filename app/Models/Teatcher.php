<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teatcher extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
    public static function getTotalTeatchers()
    {
        return self::count();
    }
}
