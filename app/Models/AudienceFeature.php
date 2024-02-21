<?php

namespace App\Models;

class AudienceFeature extends BaseModel
{
    protected $fillable = [
        'audience_id',
        'capacity',
        'multimedia',
        'computers_count',
        'interact_board',
        'features',
    ];

    protected $casts = [
        'multimedia' => 'boolean',
        'interact_board' => 'boolean',
    ];

    public function boards(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AudienceFeatureBoard::class);
    }
}
