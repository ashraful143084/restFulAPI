<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'product_name'=>$this->product_name,
            'details'=>$this->details,
            'price'=>$this->price,
            'stock'=>$this->stock,
            'discount'=>$this->discount,
        ];
    }
}
