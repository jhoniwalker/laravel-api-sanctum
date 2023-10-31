<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection, // return a list of PostResource
            'meta' => [
              'organization' => 'IBM',
              'authors' => [
                'Jhonatan Vieira',
                'IBM'
              ]
            ],
            'type' => 'articles'
          ];
    }
}
