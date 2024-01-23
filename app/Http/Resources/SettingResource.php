<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class SettingResource extends Resource
{
    public function toArray($request)
    {
        return [
            'country_dynamic_callback_url' => $this->country_dynamic_callback_url
        ];
    }
}
