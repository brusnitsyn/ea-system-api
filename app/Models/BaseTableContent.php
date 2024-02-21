<?php

namespace App\Models;

use App\Traits\HasFilters;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseTableContent extends BaseModel
{
    use HasFilters;

    protected $fillable = [
        'position',
        'interval'
    ];

    public function content(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(TableContent::class);
    }
}
