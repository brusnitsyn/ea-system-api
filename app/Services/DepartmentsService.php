<?php

namespace App\Services;

use App\Http\Resources\Department\DepartmentResource;
use App\Models\Department;

class DepartmentsService
{
    public function all(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $query = Department::query();

        $faculties = $query->get();
        return DepartmentResource::collection($faculties);
    }
}
