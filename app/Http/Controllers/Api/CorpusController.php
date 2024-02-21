<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Corpus\StoreRequest;
use App\Models\Corpus;
use Illuminate\Http\Request;

class CorpusController extends Controller
{
    public function all()
    {
        return \App\Facades\Corpus::all();
    }

    public function create(StoreRequest $request)
    {
        return $request->store();
    }
}
