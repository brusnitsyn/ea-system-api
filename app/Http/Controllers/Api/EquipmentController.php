<?php

namespace App\Http\Controllers\Api;

use App\Facades\Equipment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Equipment\StoreRequest;

class EquipmentController extends Controller
{
    public function all()
    {
        return Equipment::all();
    }

    public function get($id)
    {
        return Equipment::get($id);
    }

    public function create(StoreRequest $request)
    {
        return $request->store();
    }

    /*
        Создание, обновление и удаление комментариев
    */
    public function createComment(\App\Http\Requests\Comment\StoreRequest $request)
    {
        return $request->store();
    }
    public function updateComment(\App\Http\Requests\Comment\UpdateRequest $request)
    {
        return $request->update();
    }
}
