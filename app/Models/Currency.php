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
            get: fn ($value) => Carbon::createFromFormat("Y-m-d H:i:s", $value)->format("d/m/Y"),
        );
    }
}
