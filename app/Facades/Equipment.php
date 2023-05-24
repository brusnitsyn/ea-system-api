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
 * @method static createComment($id, array $data)
 * @method static updateComment($id, array $data)
 *
 * @see \App\Services\EquipmentService
 */
class Equipment extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'equipment.facade';
    }
}
