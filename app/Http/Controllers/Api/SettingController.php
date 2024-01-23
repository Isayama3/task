<?php

namespace App\Http\Controllers\Api;

use App\Models\Setting as Model;
use App\Http\Resources\SettingResource as Resource;
use App\Http\Requests\SettingRequest as FormRequest;

class SettingController extends Controller
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
