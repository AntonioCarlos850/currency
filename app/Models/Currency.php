<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "value",
    ];

    protected function UpdatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => (new Carbon($value))->format("d/m/Y")
        );
    }

    protected function Value(): Attribute
    {
        return Attribute::make(
            get: fn($value) => number_format(1/$value, 3, ",", "."),
        );
    }

    protected function Name(): Attribute
    {
        return Attribute::make(
            get: fn($value) => strtoupper($value),
        );
    }
}
