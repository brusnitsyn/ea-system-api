<?php

namespace App\Http\Controllers\Api;

use App\Facades\Accessories;
use App\Http\Controllers\Controller;
use App\Http\Requests\Accessories\StoreRequest;
use App\Http\Requests\Accessories\UpdateRequest;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    public function all()
    {
        return Accessories::all();
    }
    public function create(StoreRequest $request)
    {
        return $request->store();
    }
    public function update(UpdateRequest $request)
    {
        return $request->update();
    }

    public function allTypes()
    {
        return Accessories::allTypes();
    }

    public function allStatuses()
    {
        return Accessories::allStatuses();
    }
}
