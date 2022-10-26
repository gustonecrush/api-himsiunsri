<?php

namespace App\Http\Controllers;

use App\Http\Requests\DinasRequest;
use App\Http\Resources\DinasResource;
use App\Models\Dinas;
use Illuminate\Http\Request;

class DinasController extends Controller
{
    protected $dinas;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->dinas = Dinas::all();
        $dinasResource = DinasResource::collection($this->dinas);
        return $this->sendResponse($dinasResource, 'Successfully Get Dinas!');
    }

    public function findBySlug($slug)
    {
        $dinas = Dinas::where('slug', '=', $slug)->first();
        return $this->sendResponse(
            new DinasResource($dinas),
            'Successfully Get Dinas!'
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DinasRequest $request)
    {
        $dinas = new Dinas();
        $dinas->name = $request->name;
        $dinas->thumbnail = $request->thumbnail;
        $dinas->slug = $this->slug($request->singkatan);
        $dinas->singkatan = $request->singkatan;
        $dinas->description = $request->description;
        $dinas->save();

        return $this->sendResponse(
            new DinasResource($dinas),
            'Successfully Post Dinas!'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dinas  $dinas
     * @return \Illuminate\Http\Response
     */
    public function show(Dinas $dinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dinas  $dinas
     * @return \Illuminate\Http\Response
     */
    public function edit(Dinas $dinas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\DinasRequest  $request
     * @param  \App\Models\Dinas  $dinas
     * @return \Illuminate\Http\Response
     */
    public function updateBySlug(DinasRequest $request, $slug)
    {
        $dinas = Dinas::where('slug', '=', $slug)->first();
        $dinas->name = $request->name;
        $dinas->thumbnail = $request->thumbnail;
        $dinas->slug = $this->slug($request->singkatan);
        $dinas->singkatan = $request->singkatan;
        $dinas->description = $request->description;
        $dinas->save();

        return $this->sendResponse(
            new DinasResource($dinas),
            'Successfully Update Dinas!'
        );
    }

    public function destroyBySlug($slug)
    {
        $dinas = Dinas::where('slug', '=', $slug)->first();
        $dinas->delete();
        return $this->sendResponse(
            new DinasResource($dinas),
            'Successfully Delete Dinas!'
        );
    }
}
