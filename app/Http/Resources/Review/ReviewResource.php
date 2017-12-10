<?php

namespace App\Http\Resources\Review;

use App\Model\Product;
use Illuminate\Http\Resources\Json\Resource;

class ReviewResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'product_name' => (Product::find($this->product_id)->name),
            'product_id' => $this->product_id,
            'customer' => $this->customer,
            'body' => $this->review,
            'star' => $this->star
            
        ];
    }
}
