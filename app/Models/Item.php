<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Item extends Model
{
        // Define os campos que podem ser preenchidos em massa
        protected $fillable = [
            'name',
            'description',
            'price',
        ];

    // Opcional: Ajustar formato de exibição
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timezone(config('app.timezone'))->toDateTimeString();
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timezone(config('app.timezone'))->toDateTimeString();
    }
}

