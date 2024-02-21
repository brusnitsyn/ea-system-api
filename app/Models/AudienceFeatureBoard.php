<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AudienceFeatureBoard extends BaseModel
{
    protected $fillable = [
        'audience_feature_id',
        'board_size_id',
        'board_type_id'
    ];

    public function audienceFeature(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(AudienceFeature::class);
    }

    public function boardSize(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(BoardSize::class);
    }

    public function boardType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(BoardType::class);
    }
}
