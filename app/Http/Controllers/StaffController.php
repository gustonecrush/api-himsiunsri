<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Http\Resources\StaffResource;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{

    protected $staffs;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->staffs = Staff::all();
        $staffResource = StaffResource::collection($this->staffs);
        return $this->sendResponse($staffResource, "Successfully Get Staffs!");
    }

    public function find($slug)
    {
        $staff = Staff::where('slug', '=', $slug)->get();
        $staffResource = StaffResource::collection($staff);
        return $this->sendResponse($staffResource, "Successfully Get Staff!");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffRequest $request)
    {
        $staff = new Staff();
        $staff->name = $request->name;
        $staff->nim = $request->nim;
        $staff->password = bcrypt($request->nim);
        $staff->slug = $this->slug($request->name);
        $staff->dinas_id = $request->dinas_id;
        $staff->divisi_id = $request->divisi_id;
        $staff->ttl = $request->ttl;
        $staff->gender = $request->gender;
        $staff->alamat = $request->alamat;
        $staff->angkatan = $request->angkatan;
        $staff->jabatan = $request->jabatan;
        $staff->hobi = $request->hobi;
        $staff->email = $request->email;
        $staff->instagram = $request->instagram;
        $staff->periode = $request->periode;
        $staff->kesan_pesan = $request->kesan_pesan;
        $staff->picture = $request->picture;
        $staff->save();

        return $this->sendResponse(new StaffResource($staff), "Successfully Post Staff!");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function updateBySlug(StaffRequest $request, $slug)
    {
        $staff = Staff::where('slug', '=', $slug)->first();
        $staff->name = $request->name;
        $staff->nim = $request->nim;
        $staff->password = bcrypt($request->nim);
        $staff->slug = $this->slug($request->name);
        $staff->dinas_id = $request->dinas_id;
        $staff->divisi_id = $request->divisi_id;
        $staff->ttl = $request->ttl;
        $staff->gender = $request->gender;
        $staff->alamat = $request->alamat;
        $staff->angkatan = $request->angkatan;
        $staff->jabatan = $request->jabatan;
        $staff->hobi = $request->hobi;
        $staff->email = $request->email;
        $staff->instagram = $request->instagram;
        $staff->periode = $request->periode;
        $staff->kesan_pesan = $request->kesan_pesan;
        $staff->picture = $request->picture;
        $staff->save();

        return $this->sendResponse(new StaffResource($staff), "Successfully Update Staff!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff = Staff::where('id', '=', $staff->id)->first();
        $staff->delete();
        return $this->sendResponse(new StaffResource($staff), "Successfully Delete Staff!");
    }
}
