<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'title'=>$this->title,
            'body'=>$this->body,
        ];
    }
    public function with($request)
    {
        return[
            'version'=>"0.0.1",
            'link'=>url('http://www.facebook.com')
        ];
    }
}
