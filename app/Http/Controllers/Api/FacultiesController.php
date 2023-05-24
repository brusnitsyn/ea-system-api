<?php

namespace App\Http\Controllers\Api;

use App\Facades\Faculties;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacultiesController extends Controller
{
    public function all()
    {
        return Faculties::all();
    }
}
