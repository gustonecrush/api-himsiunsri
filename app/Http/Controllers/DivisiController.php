<?php

namespace App\Http\Controllers;

use App\Http\Requests\DivisiRequest;
use App\Http\Resources\DivisiResource;
use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{

    protected $divisi;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->divisi = Divisi::all();
        $divisiResource = DivisiResource::collection($this->divisi);
        return $this->sendResponse($divisiResource, "Successfully Get Divisi!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DivisiRequest $request)
    {
        $divisi = new Divisi();
        $divisi->name = $request->name;
        $divisi->dinas_id = $request->dinas_id;
        $divisi->description = $request->description;
        $divisi->save();

        return $this->sendResponse(new DivisiResource($divisi), "Successfully Post Divisi!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function show(Divisi $divisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Divisi $divisi)
    {
        $divisi = Divisi::find($divisi->id);
        $divisi->name = $request->name;
        $divisi->dinas_id = $request->dinas_id;
        $divisi->description = $request->description;
        $divisi->save();

        return $this->sendResponse(new DivisiResource($divisi), "Successfully Update Divisi!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Divisi $divisi)
    {
        $divisi = Divisi::find($divisi->id);
        $divisi->delete();
        return $this->sendResponse(new DivisiResource($divisi), "Successfully Delete Divisi!");
    }
}
