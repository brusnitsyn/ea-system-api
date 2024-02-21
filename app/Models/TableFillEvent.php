<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableFillEvent extends BaseModel
{
    protected $fillable = [
        'name',
        'owner',
        'comment',
    ];
}
