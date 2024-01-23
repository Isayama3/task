<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class CountryLogResource extends Resource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'country_id' => $this->country_id,
            'logs' => $this->logs,
        ];
    }
}
