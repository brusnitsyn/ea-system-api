<?php

namespace App\Services;

use App\Exceptions\InvalidCredentialsException;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountService
{
    public function register(array $data): void
    {
        $data['password'] = Hash::make($data['password']);
        $data = array_merge($data, array('rule_id' => $data['rule']['id']));

        $user = User::query()
            ->create($data);
    }

    /**
     * @throws InvalidCredentialsException
     */
    public function login(string $login, string $password)
    {
        if (!auth('web')->attempt(['login' => $login, 'password' => $password])) {
            throw new InvalidCredentialsException();
        }

        return auth()->user()->createToken('main')->plainTextToken;
    }
}
