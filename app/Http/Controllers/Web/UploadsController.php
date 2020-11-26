<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class UploadsController extends Controller
{
    protected $apikey;

    public function __construct()
    {
        $this->apikey = "UPU";
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uploads.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://theatreke.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $ref = $database->getReference('Videos');

        $key = $ref->push()->getKey();
        
        

        $ref = $ref->getChild($key)->set([
            'category'=>$request->category,
            'type'=>$request->type,
            'title'=>$request->title,
            'location'=>$request->location,
            'language'=>$request->language,
            'synopsis'=>$request->synopsis,
            'producer'=>$request->prodcer,
            'playwright'=>$request->playwright,
            'stage_manager  '=>$request->stage_manager,
            'crew'=>$request->crew,
            'cast'=>$request->cast,
            'tags'=>$request->tags,
            'price'=>$request->price,
            'created_at'=>$request->created_at,
            'uploaded_by'=>$request->uploaded_by,
            'media_url'=>$request->media_url       

        ]);

        return back()->with('message', 'Successfully Uploaded');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
