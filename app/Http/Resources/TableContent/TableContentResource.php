<?php

namespace App\Http\Resources\TableContent;

use App\Http\Resources\Faculties\FacultiesResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TableContentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'date' => $this->date,
            'isFaculty' => $this->when((bool)$this->faculty, true, false),
            'isEvent' => $this->when((bool)$this->tableFillEvent, true, false),
            'isAnother' => $this->when((bool)$this->tableAnotherFill, true, false),
            'faculty' => $this->when($this->faculty, FacultiesResource::make($this->faculty)),
            'event' => $this->when($this->tableFillEvent, TableFillEventResource::make($this->tableFillEvent)),
            'fill_type' => $this->when($this->tableAnotherFill, TableAnotherFillResource::make($this->tableAnotherFill  )),
        ];
    }
}
