<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rule;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function all()
    {
        return Rule::all();
    }
}
