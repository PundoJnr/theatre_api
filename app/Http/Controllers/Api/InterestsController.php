<?php

namespace App\Http\Controllers\Api;

use App\Models\Interest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\InterestsResource;

class InterestsController extends Controller
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
        $interests = Interest::all();
        
        return response()->json($interests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Interest $interest)
    {
        $interest =  $request->user()->interests()->create($request->only('title', 'description'));

        return response()->json([
            'message' => 'Your interest has been submitted',
            'interest' => new InterestsResource($interest)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Interest $interest)
    {
        $interest =   $interest->create($request->only('title', 'description', 'user_id'));

        return response()->json([
            'message' => 'Your interest has been submitted',
            'interest' => new InterestsResource($interest)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Interest $interest)
    {
        return response()->json([
            'id' => $interest->id,
            'title' => $interest->title,
            'description' => $interest->description,
        ]);
    }

 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interest $interest)
    {
        // $this->authorize("update", $interest);
 
        $interest->update($request->only('type', 'title'));
 
        return response()->json([
        'message' => "Your interest has been updated.",
        'title' => $interest->title
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interest $interest)
    {
        // $this->authorize("delete", $interest);
 
        $interest->delete();
 
        return response()->json([
        'message' => "Your interest has been deleted."
        ]);
    }
}
