<?php

namespace App\Http\Controllers\Admin\Ambulance;

use Illuminate\Http\Request;
use App\Services\AmbulanceServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Ambulance\AmbulanceStoreRequest;
use App\Http\Requests\Admin\Ambulance\AmbulanceUpdateRequest;

class AmbulanceController extends Controller
{
    protected $AmbulanceServices;

    public function __construct(AmbulanceServices $AmbulanceServices)
    {
        $this->AmbulanceServices = $AmbulanceServices;
    }

    public function index()
    {

     return   $this->AmbulanceServices->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->AmbulanceServices->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AmbulanceStoreRequest $request)

    {
       // return $request;
        return $this->AmbulanceServices->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->AmbulanceServices->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->AmbulanceServices->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AmbulanceUpdateRequest $request, string $id)
    {
        return $this->AmbulanceServices->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->AmbulanceServices->destroy($id);
    }
}
