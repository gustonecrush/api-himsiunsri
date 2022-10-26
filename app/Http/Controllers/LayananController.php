<?php

namespace App\Http\Controllers;

use App\Http\Requests\LayananRequest;
use App\Http\Resources\LayananResource;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    protected $layanans;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->layanans = Layanan::all();
        $layananResource = LayananResource::collection($this->layanans);
        return $this->sendResponse(
            $layananResource,
            'Successfully Get Layanans!'
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\LayananRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LayananRequest $request)
    {
        $layanan = new Layanan();
        $layanan->name = $request->name;
        $layanan->slug = $this->slug($layanan->name);
        $layanan->available_status = $request->available_status;
        $layanan->save();

        return $this->sendResponse(
            new LayananResource($layanan),
            'Successfully Post Layanan!'
        );
    }

    public function findBySlug($slug)
    {
        $layanan = Layanan::where('slug', '=', $slug)->first();
        return $this->sendResponse(
            new LayananResource($layanan),
            'Successfully Get Layanan!'
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(layanan $layanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\LayananRequest  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(LayananRequest $request, Layanan $layanan)
    {
        $layanan->name = $request->name;
        $layanan->slug = $this->slug($layanan->name);
        $layanan->available_status = $request->available_status;
        $layanan->save();

        return $this->sendResponse(
            new LayananResource($layanan),
            'Successfully Update Layanan!'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroyBySlug($slug)
    {
        $layanan = Layanan::where('slug', '=', $slug)->first();
        $layanan->delete();
        return $this->sendResponse(new LayananResource($layanan), "Successfully Delete Proker!");
    }
}
