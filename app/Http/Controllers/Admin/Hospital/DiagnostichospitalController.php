<?php

namespace App\Http\Controllers\Admin\Hospital;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\DiagnosticHospitalServices;
use App\Http\Requests\Admin\Hospital\DiagnosticHospitalStoreRequest;
use App\Http\Requests\Admin\Hospital\DiagnosticHospitalUpdateRequest;

class DiagnostichospitalController extends Controller
{
     protected $DiagnosticHospitalServices;

    public function __construct(DiagnosticHospitalServices $DiagnosticHospitalServices)
    {
        $this->DiagnosticHospitalServices = $DiagnosticHospitalServices;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->DiagnosticHospitalServices->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->DiagnosticHospitalServices->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DiagnosticHospitalStoreRequest $request)
    {
        return $this->DiagnosticHospitalServices->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->DiagnosticHospitalServices->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->DiagnosticHospitalServices->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DiagnosticHospitalUpdateRequest $request, string $id)
    {
        return $this->DiagnosticHospitalServices->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->DiagnosticHospitalServices->destroy($id);
    }
}
