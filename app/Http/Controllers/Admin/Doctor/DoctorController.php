<?php

namespace App\Http\Controllers\Admin\Doctor;

use Illuminate\Http\Request;
use App\Services\DoctorServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Doctor\DoctorStoreRequest;
use App\Http\Requests\Admin\Doctor\DoctorUpdateRequest;

class DoctorController extends Controller
{
    protected $DoctorServices;

    public function __construct(DoctorServices $DoctorServices){
        $this ->DoctorServices = $DoctorServices;
    }
    public function index()
    {
      return   $this->DoctorServices->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return   $this->DoctorServices->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorStoreRequest $request)
    {
        return   $this->DoctorServices->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return   $this->DoctorServices->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return   $this->DoctorServices->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorUpdateRequest $request, string $id)
    {
        return   $this->DoctorServices->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return   $this->DoctorServices->destroy($id);
    }
}
