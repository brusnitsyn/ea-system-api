<?php

namespace App\Http\Controllers\Api;

use App\Facades\Faculties;
use App\Http\Controllers\Controller;
use App\Http\Requests\Faculty\StoreRequest;
use Illuminate\Http\Request;

class FacultiesController extends Controller
{
    public function all()
    {
        return Faculties::all();
    }

    public function create(StoreRequest $request)
    {
        return $request->store();
    }
}
