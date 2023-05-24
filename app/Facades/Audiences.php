<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static all()
 * @method static get($id)
 * @method static create(array $data)
 * @method static update($id, array $data)
 * @method static delete($id)
 *
 * @see \App\Services\AudiencesService
 */
class Audiences extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'audiences.facade';
    }
}
