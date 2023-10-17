<?php

namespace App\Http\Resources\Mobile;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
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
            'data' => $this->data,
            'read_at' => $this->read_at,
            'created_at' => Carbon::parse($this->created_at)->setTimezone('Asia/Makassar')->toIso8601String()
        ];
    }
}
