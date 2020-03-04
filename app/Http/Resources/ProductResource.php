<?php

namespace App\Http\Resources;

use App\Models\Status;
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
            'id'=>$this->id,
            'name'=>$this->name,
            'description'=>$this->description,
            'slug'=>$this->slug,
            'user_id'=>$this->user_id,
            'condition_id'=>$this->condition_id,
            'status_id'=>$this->status_id,
            'category_id'=>$this->category_id,
            'posted'=>$this->created_at->diffForHumans(),


         // 'replies'=> ReplyResource::collection($this->replies),
          'created_at' => $this->created_at->diffForHumans(),
          'status'=>new StatusResource($this->status),
          'condition'=>new ConditionResource($this->condition),
          'category'=>new CategoryResource($this->category),
          'user'=>new UserResource($this->user),
          'comment'=>ProductCommentResource::collection($this->comment),
          'images'=>ImagesResource::collection($this->images),
        ];
    }
}
