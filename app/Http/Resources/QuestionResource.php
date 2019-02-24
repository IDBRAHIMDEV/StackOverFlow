<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'title' => $this->title,
            'path' => $this->slug,
            'content' => $this->body,
            'user' => $this->user->name,
            'replies' => $this->replies,
            'category' => $this->category->name,
            'date' => $this->created_at->diffForHumans()
        ];
    }
}
