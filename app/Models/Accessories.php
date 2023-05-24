<?php

namespace App\Models;

class Accessories extends BaseModel
{
    protected $fillable = [
        'title',
        'serial',
        'date_buy',
        'date_wrnt',
        'date_check',
        'equipment_id',
        'type_id',
        'status_id',
    ];

    public function type(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(TypeOfAccessories::class, 'id', 'type_id');
    }

    public function status(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(StatusAccessories::class, 'id', 'status_id');
    }

    public function equipment(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Equipment::class, 'id', 'equipment_id');
    }
}
