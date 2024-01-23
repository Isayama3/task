<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class CountryResource extends Resource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name_ar' => $this->name_ar,
            'name_en' => $this->name_en,
            'description_ar' => $this->description_ar,
            'description_en' => $this->description_en,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
