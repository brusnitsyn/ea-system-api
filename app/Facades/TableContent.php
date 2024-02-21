<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static all()
 * @method static get($id)
 * @method static create(array $data)
 * @method static update($id, array $data)
 * @method static delete($id)
 * @method static getAllBaseContent()
 * @method static getAnotherFill()
 *
 * @see \App\Services\TableContentService
 */
class TableContent extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'tablecontent.facade';
    }
}
