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
 * @see \App\Services\AccessoriesService
 */
class Corpus extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'corpus.facade';
    }
}
