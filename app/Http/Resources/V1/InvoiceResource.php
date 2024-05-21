<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "customer_id"=> $this->invoice_number,
            "amount"=> $this->amount,
            "status"=> $this->status,
            "bild_dated"=> $this->bild_dated,
            "paid_dated"=> $this->paid_dated,
        ];
    }
}
