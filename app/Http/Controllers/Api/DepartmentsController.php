<?php

namespace App\Http\Controllers\Api;

use App\Facades\Departments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function all()
    {
        return Departments::all();
    }
}
