<?php

namespace App\Http\Controllers\Api;

use App\Facades\Audiences;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AudiencesController extends Controller
{
    public function all()
    {
        return Audiences::all();
    }
}
