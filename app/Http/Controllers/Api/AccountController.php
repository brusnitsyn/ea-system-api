<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\LoginRequest;
use App\Http\Requests\Account\RegisterRequest;
use App\Http\Requests\Account\UpdateAccountRequest;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $request->register();
    }

    public function login(LoginRequest $request): array
    {
        return $request->login();
    }

    public function user(): array
    {
        return UserResource::make(auth()->user())->resolve();
    }

    public function logout(): \Illuminate\Http\JsonResponse
    {
        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => __('account.logout')
        ]);
    }
}
