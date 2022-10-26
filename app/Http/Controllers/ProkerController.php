<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProkerRequest;
use App\Http\Resources\ProkerResource;
use App\Models\Proker;
use Illuminate\Http\Request;

class ProkerController extends Controller
{
    protected $prokers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->prokers = Proker::all();
        $prokerResource = ProkerResource::collection($this->prokers);
        return $this->sendResponse(
            $prokerResource,
            'Successfully Get HIMSI Prokers!'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProkerRequest $request)
    {
        $proker = new Proker();
        $proker->name = $request->name;
        $proker->date = $request->date;
        $proker->slug = $this->slug($request->name) . "-" . $request->periode;
        $proker->thumbnail = $request->thumbnail;
        $proker->target_audience = $request->target_audience;
        $proker->description = $request->description;
        $proker->periode = $request->periode;
        $proker->status_proker = $request->status_proker;
        $proker->save();

        return $this->sendResponse(new ProkerResource($proker), "Successfully Post Proker!");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proker  $proker
     * @return \Illuminate\Http\Response
     */
    public function update(ProkerRequest $request, Proker $proker)
    {
        $proker->name = $request->name;
        $proker->date = $request->date;
        $proker->slug = $this->slug($request->name) . "-" . $request->periode;
        $proker->thumbnail = $request->thumbnail;
        $proker->target_audience = $request->target_audience;
        $proker->description = $request->description;
        $proker->periode = $request->periode;
        $proker->status_proker = $request->status_proker;
        $proker->save();

        return $this->sendResponse(
            new ProkerResource($proker),
            'Successfully Update Proker!'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proker  $proker
     * @return \Illuminate\Http\Response
     */
    public function destroyBySlug($slug)
    {
        $proker = Proker::where('slug', '=', $slug)->first();
        $proker->delete();
        return $this->sendResponse(new ProkerResource($proker), "Successfully Delete Proker!");
    }

    public function findBySlug($slug) 
    {
        $proker = Proker::where('slug', '=', $slug)->first();
        return $this->sendResponse(new ProkerResource($proker), "Successfully Get Proker!");
    }
}
