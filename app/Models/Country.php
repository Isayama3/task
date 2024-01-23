<?php

namespace App\Models;

class Country extends BaseModel
{
    public function Logs()
    {
        return $this->hasMany(CountryLog::class);
    }
}
