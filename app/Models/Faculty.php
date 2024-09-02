<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Faculty extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }
    public static function getTotalFaculties()
    {
        return self::count();
    }
}
