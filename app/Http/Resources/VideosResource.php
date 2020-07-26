<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VideosResource extends JsonResource
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
            'id' => $this->id,
            'type' => $this->type,
            'title' => $this->title,
            'location' => $this->location,
            'synopsis' => $this->synopsis,
            'language' => $this->language,
            'director' => $this->director,
            'playwright' => $this->playwright,
            'stage_manager' => $this->stage_manager,
            'crew' => $this->crew,
            'cast' => $this->cast,
            'media_link' => $this->media_link,
            'tags' => $this->tags,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'genre' => $this->genre,
            'category' => $this->category,
            'price' => $this->price,
            // 'user' => new UserResource($this->user)
        ];
    }
}
