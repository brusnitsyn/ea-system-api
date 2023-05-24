<?php

namespace App\Models;

class Equipment extends BaseModel
{
    protected $fillable = [
        'title',
        'serial',
        'audience_id',
        'worker_id'
    ];

    public function worker(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(User::class, 'id', 'worker_id');
    }

    public function comments(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable')->orderBy('created_at', 'desc');
    }

    public function accessories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Accessories::class, 'equipment_id', 'id');
    }
}
