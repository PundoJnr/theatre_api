<?php

namespace App\Http\Controllers\Api;

use App\Videos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\VideosResource;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vidoes = Videos::all();

        return VideosResource::collection($vidoes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video =  $request->user()->videos()->create($request->only('type', 'title'));

        return response()->json([
            'message' => 'Your question has been submitted',
            'video' => new VideoResource($video)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Videos $video)
    {
        return response()->json([
            'id' => $video->id,
            'type' => $video->type,
            'title' => $video->title,
            'location' => $video->location,
            'synopsis' => $video->synopsis,
            'language' => $video->language,
            'director' => $video->director,
            'playwright' => $video->playwright,
            'stage_manager' => $video->stage_manager,
            'crew' => $video->crew,
            'cast' => $video->cast,
            'media_link' => $video->media_link,
            'tags' => $video->tags,
            'created_at' => $video->created_at,
            'updated_at' => $video->updated_at,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Videos $video)
    {
        // $this->authorize("update", $video);
 
        $video->update($request->only('type', 'title'));
 
        return response()->json([
        'message' => "Your video has been updated.",
        'title' => $video->title
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
