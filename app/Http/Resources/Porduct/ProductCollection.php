<?php

namespace App\Http\Resources\Porduct;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->title,
            'price' => $this->price,
            'discount' => $this->discount,
            'totalPrice' => round((1 - ($this->discount/100)) * $this->price, 2),
            'rating' => $this->reviews->count() > 0 ?
                round($this->reviews->sum('star') / $this->reviews->count(),2)
                : 'No Rating Yet'
            ,
            'href' => [
                'product' => route('products.show', $this->id)
            ]
        ];
    }
}
