<?php

namespace App\Models;

class TableContent extends BaseModel
{
    protected $fillable = [
        'audience_id',
        'base_table_content_id',
        'faculty_id',
        'table_fill_event_id',
        'table_another_fill_id',
        'date',
    ];

    public function audience()
    {
        return $this->belongsTo(Audience::class);
    }

    public function baseTableContent()
    {
        return $this->belongsTo(BaseTableContent::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function tableFillEvent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TableFillEvent::class);
    }

    public function tableAnotherFill()
    {
        return $this->belongsTo(TableAnotherFill::class);
    }
}
