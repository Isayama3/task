<?php

namespace App\Http\Controllers\Api;

use App\Models\CountryLog as Model;
use App\Http\Resources\CountryLogResource as Resource;
use App\Http\Requests\CountryLogRequest as FormRequest;

class CountryLogController extends Controller
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
