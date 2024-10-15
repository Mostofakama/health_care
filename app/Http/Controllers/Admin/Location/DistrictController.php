<?php

namespace App\Http\Controllers\Admin\Location;

use Illuminate\Http\Request;
use App\Services\DistrictServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\District\DistrictStoreRequest;
use App\Http\Requests\Admin\District\DistrictUpdateRequest;

class DistrictController extends Controller
{
    protected $DistrictServices;

    public function __construct(DistrictServices $DistrictServices)
    {
        $this->DistrictServices = $DistrictServices;
    }
    public function index()
    {
        return $this->DistrictServices->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->DistrictServices->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DistrictStoreRequest $request)
    {
        return $this->DistrictServices->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->DistrictServices->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->DistrictServices->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DistrictUpdateRequest $request, string $id)
    {
        return $this->DistrictServices->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->DistrictServices->destroy($id);
    }
}
