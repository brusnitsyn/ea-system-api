<?php

namespace App\Http\Controllers\Api;

use App\Facades\TableContent;
use App\Http\Controllers\Controller;
use App\Http\Requests\TableContent\StoreRequest;
use Illuminate\Http\Request;

class TableContentController extends Controller
{
    public function all()
    {
        return TableContent::all();
    }

    public function allBase()
    {
        return TableContent::getAllBaseContent();
    }

    public function allBaseChildren()
    {
        return TableContent::getAllBaseContent();
    }

    public function create(StoreRequest $request)
    {
        return $request->store();
    }

    public function getAnotherFill()
    {
        return TableContent::getAnotherFill();
    }
}
