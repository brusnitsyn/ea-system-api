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
 * @method static allTypes()
 * @method static getType($id)
 * @method static createType(array $data)
 * @method static updateType($id, array $data)
 * @method static deleteType($id)
 *
 * @method static allStatuses()
 * @method static getStatus($id)
 * @method static createStatus(array $data)
 * @method static updateStatus($id, array $data)
 * @method static deleteStatus($id)
 *
 * @see \App\Services\AccessoriesService
 */
class Accessories extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'accessories.facade';
    }
}
