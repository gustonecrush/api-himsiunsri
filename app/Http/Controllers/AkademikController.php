<?php

namespace App\Http\Controllers;

use App\Http\Requests\AkademikRequest;
use App\Http\Resources\AkademikResource;
use App\Models\Akademik;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    protected $posts;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->posts = Akademik::all();
        $postResource = AkademikResource::collection($this->posts);
        return $this->sendResponse($postResource, 'Successfully Get Posts!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AkademikRequest $request)
    {
        $post = new Akademik();
        $post->title = $request->title;
        $post->slug = $this->slug($request->title);
        $post->author = $request->author;
        $post->content = $request->content;
        $post->thumbnail = $request->thumbnail;
        $post->category = $request->category;
        $post->save();

        return $this->sendResponse(
            new AkademikResource($post),
            "Successfully Post $request->title!"
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akademik  $akademik
     * @return \Illuminate\Http\Response
     */
    public function findBySlug($slug)
    {
        $post = Akademik::where('slug', '=', $slug)->first();
        return $this->sendResponse(
            new AkademikResource($post),
            "Successfully Get $post->title!"
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akademik  $akademik
     * @return \Illuminate\Http\Response
     */
    public function updateBySlug(AkademikRequest $request, $slug)
    {
        $post = Akademik::where('slug', '=', $slug)->first();
        $post->title = $request->title;
        $post->slug = $this->slug($request->title);
        $post->author = $request->author;
        $post->content = $request->content;
        $post->thumbnail = $request->thumbnail;
        $post->category = $request->category;
        $post->save();

        return $this->sendResponse(
            new AkademikResource($post),
            "Successfully Update $request->title!"
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akademik  $akademik
     * @return \Illuminate\Http\Response
     */
    public function destroyBySlug($slug)
    {
        $post = Akademik::where('slug', '=', $slug)->first();
        $post->delete();
        return $this->sendResponse(
            new AkademikResource($post),
            "Successfully Delete $post->title"
        );
    }
}
