<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static all()
 * @method static get($id)
 * @method static create(array $data)
 * @method static update(array $data)
 * @method static delete($id)
 * @method static getAudienceFeature($id)
 * @method static createAudienceFeature(array $data)
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
