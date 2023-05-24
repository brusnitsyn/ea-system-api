<?php

namespace App\Models;

use App\Traits\HasFilters;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasFilters;

    protected string $searchField = 'search';
    protected array $searchInFields = ['title'];
}
