<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static Illuminate\Http\Resources\Json\AnonymousResourceCollection all()
 * @method static get($id)
 * @method static create(array $data)
 * @method static update($id, array $data)
 * @method static delete($id)
 *
 * @see \App\Services\FacultiesService
 */
class Faculties extends Facade
{
    protected static function getFacadeAccessor() : string
    {
        return 'faculties.facade';
    }
}
