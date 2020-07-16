<?php

namespace App\Http\Controllers\Api;

use App\Videos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Videos :: all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
