<?php

namespace App\Http\Requests;

class CountryRequest extends BaseRequest
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
                        'name_ar' => 'required|string',
                        'name_en' => 'required|string',
                        'description_ar' => 'required|string',
                        'description_en' => 'required|string',
                    ];
                }
            case 'PUT': {
                    return [
                        'name_ar' => 'nullable|string',
                        'name_en' => 'nullable|string',
                        'description_ar' => 'nullable|string',
                        'description_en' => 'nullable|string',
                    ];
                }
        }
    }
}
