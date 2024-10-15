<?php

namespace App\Http\Controllers\Admin\Location;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SubDistrictServices;

class SubDistrictController extends Controller
{
    protected $SubDistrictServices;

    public function __construct(SubDistrictServices $SubDistrictServices)
    {
        $this->SubDistrictServices = $SubDistrictServices;
    }
    public function index()
    {
        return $this->SubDistrictServices->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->SubDistrictServices->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->SubDistrictServices->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->SubDistrictServices->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->SubDistrictServices->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->SubDistrictServices->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->SubDistrictServices->destroy($id);
    }
}
