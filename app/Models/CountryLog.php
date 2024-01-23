<?php

namespace App\Models;

class CountryLog extends BaseModel
{
    public function Country()
    {
        return $this->belongsTo(Country::class);
    }
}
