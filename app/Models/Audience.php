<?php

namespace App\Models;

class Audience extends BaseModel
{
    protected $fillable = [
        'title',
        'number',
        'corpus_id'
    ];

    public function feature(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(AudienceFeature::class);
    }
}
