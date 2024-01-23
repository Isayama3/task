<?php

namespace App\Http\Controllers\Api;

use App\Models\Country as Model;
use App\Http\Resources\CountryResource as Resource;
use App\Http\Requests\CountryRequest as FormRequest;

class CountryController extends Controller
{
    public function __construct(FormRequest $request, Model $model, $resource = Resource::class)
    {
        parent::__construct(
            $request,
            $model,
            $resource,
            hasDelete: true,
        );
    }
}
