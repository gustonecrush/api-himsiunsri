<?php

namespace App\Http\Controllers;

use App\Http\Requests\PojokHimsiRequest;
use App\Http\Resources\PojokHimsiResource;
use App\Models\PojokHimsi;
use Illuminate\Http\Request;

class PojokHimsiController extends Controller
{
    protected $posts;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->posts = PojokHimsi::all();
        $postResource = PojokHimsiResource::collection($this->posts);
        return $this->sendResponse($postResource, 'Successfully Get Posts!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new PojokHimsi();
        $post->title = $request->title;
        $post->slug = $this->slug($request->title);
        $post->author = $request->author;
        $post->content = $request->content;
        $post->periode = $request->periode;
        $post->cover = $request->cover;
        $post->save();

        return $this->sendResponse(
            new PojokHimsiResource($post),
            "Successfully Post $post->title!"
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PojokHimsi  $pojokHimsi
     * @return \Illuminate\Http\Response
     */
    public function findBySlug($slug)
    {
        $post = PojokHimsi::where('slug', '=', $slug)->first();
        return $this->sendResponse(
            new PojokHimsiResource($post),
            "Successfully Get $post->title!"
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PojokHimsi  $pojokHimsi
     * @return \Illuminate\Http\Response
     */
    public function updateBySlug(PojokHimsiRequest $request, $slug)
    {
        $post = PojokHimsi::where('slug', '=', $slug)->first();
        $post->title = $request->title;
        $post->slug = $this->slug($request->title);
        $post->author = $request->author;
        $post->content = $request->content;
        $post->periode = $request->periode;
        $post->cover = $request->cover;
        $post->save();

        return $this->sendResponse(
            new PojokHimsiResource($post),
            'Successfully Update Post!'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PojokHimsi  $pojokHimsi
     * @return \Illuminate\Http\Response
     */
    public function destroyBySlug($slug)
    {
        $post = PojokHimsi::where('slug', '=', $slug)->first();
        $post->delete();
        return $this->sendResponse(
            new PojokHimsiResource($post),
            'Successfully Delete Post!'
        );
    }
}
