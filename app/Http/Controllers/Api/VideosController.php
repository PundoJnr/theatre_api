<?php

namespace App\Http\Controllers\Api;

use App\Videos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\VideosResource;

class VideosController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');
    // }
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $interest =  $request->user()->videos()->create($request->only('type', 'title'));

        return response()->json([
            'message' => 'Your video has been submitted',
            'video' => new VideosResource($video)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Videos $video)
    {
        $videos = $video->create($request->only(['type', 'title', 'location', 'language', 'synopsis', 'director', 'playwright', 'stage_manager', 'crew', 'cast', 'media_link', 'tags', 'genre', 'category', 'price']));

        return response()->json([
            'message' => 'Your video has been submitted',
            'video' => new VideosResource($videos)
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
    public function destroy(Videos $video)
    {
        // $this->authorize("delete", $video);
 
        $video->delete();
 
        return response()->json([
        'message' => "Your video has been deleted."
        ]);
    }
}
