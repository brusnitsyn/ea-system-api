<?php

namespace App\Http\Controllers\Api;

use App\Facades\Audiences;
use App\Http\Controllers\Controller;
use App\Http\Requests\Audiences\StoreRequest;
use App\Http\Requests\Audiences\UpdateRequest;
use App\Models\BoardSize;
use App\Models\BoardType;
use Illuminate\Http\Request;

class AudiencesController extends Controller
{
    public function all()
    {

        return Audiences::all();
    }

    public function create(StoreRequest $request)
    {
        return $request->store();
    }

    public function update(UpdateRequest $request)
    {
        $request->update();
    }

    public function getFeature()
    {
        $id = request('audienceId');
        if ($id !== null)
            return Audiences::getAudienceFeature($id);
        else
            return response()->json(null, '404');
    }

    public function createFeature()
    {

    }

    public function getBoardTypes()
    {
        return BoardType::all();
    }

    public function getBoardSizes()
    {
        return BoardSize::all();
    }
}
