<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void register(array $data)
 * @method static string login(string $login, string $password)
 *
 * @see \App\Services\AccountService
 */
class Account extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'account.facade';
    }
}
