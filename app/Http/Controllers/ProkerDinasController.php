<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProkerDinasRequest;
use App\Http\Resources\ProkerDinasResource;
use App\Http\Resources\ProkerResource;
use App\Models\ProkerDinas;
use Illuminate\Http\Request;

class ProkerDinasController extends Controller
{

    protected $prokerDinas;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->prokerDinas = ProkerDinas::all();
        $prokerDinasResource = ProkerDinasResource::collection($this->prokerDinas);
        return $this->sendResponse($prokerDinasResource, "Successfully Get Proker Dinas!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProkerDinasRequest $request)
    {
        $prokerDinas = new ProkerDinas();
        $prokerDinas->name = $request->name;
        $prokerDinas->dinas_id = $request->dinas_id;
        $prokerDinas->description = $request->description;
        $prokerDinas->save();

        return $this->sendResponse(new ProkerDinasResource($prokerDinas), "Successfully Post Proker Dinas!");
    }

    public function update(ProkerDinasRequest $request, $id)
    {
        $prokerDinas = ProkerDinas::find($id);
        $prokerDinas->name = $request->name;
        $prokerDinas->dinas_id = $request->dinas_id;
        $prokerDinas->description = $request->description;
        $prokerDinas->save();

        return $this->sendResponse(new ProkerDinasResource($prokerDinas), "Successfully Update Proker Dinas!");
    }

    public function destroy($id)
    {
        $prokerDinas = ProkerDinas::find($id);
        $prokerDinas->delete();
        return $this->sendResponse(new ProkerDinasResource($prokerDinas), "Successfully Delete Proker Dinas!");
    }
}
