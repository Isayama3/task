<?php

namespace App\Http\Requests;

class SettingRequest extends BaseRequest
{
    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                    return [];
                }
            case 'POST': {
                    return [
                        'country_dynamic_callback_url' => 'required|url',
                    ];
                }
            case 'PUT': {
                    return [
                        'country_dynamic_callback_url' => 'nullable|url',
                    ];
                }
        }
    }
}
