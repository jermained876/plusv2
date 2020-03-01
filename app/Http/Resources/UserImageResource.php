<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserImageResource extends JsonResource
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
            'id'=>$this->id,
            "name" => $this->name,
            'slug' =>$this->slug,
            "user_id"=>$this->user_id,
            "image_url"=>$this->image_url

        ];
    }
}
