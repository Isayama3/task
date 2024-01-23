<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Passport\Http\Controllers\HandlesOAuthErrors;
use Laravel\Passport\Http\Controllers\AccessTokenController;
use League\OAuth2\Server\AuthorizationServer;

class AuthController extends Controller
{
    use HandlesOAuthErrors;

    public function handleProviderCallback(Request $request, AuthorizationServer $authorizationServer)
    {
        $response = app(AccessTokenController::class)->issueToken(
            $request->createTokenRequest(),
            $authorizationServer
        );

        return response()->json(json_decode($response->getContent(), true));
    }
}
