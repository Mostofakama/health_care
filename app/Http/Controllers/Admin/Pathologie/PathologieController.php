<?php

namespace App\Http\Controllers\Admin\Pathologie;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\PathologieServices;
use App\Http\Requests\Admin\Pathologie\PathologieStoreRequest;
use App\Http\Requests\Admin\Pathologie\PathologieUpdateRequest;

class PathologieController extends Controller
{

    protected $PathologieServices;

    public function __construct(PathologieServices $PathologieServices)
    {
        $this->PathologieServices = $PathologieServices;
    }

    public function index()
    {

     return   $this->PathologieServices->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->PathologieServices->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PathologieStoreRequest $request)
    {
        return $this->PathologieServices->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->PathologieServices->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->PathologieServices->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PathologieUpdateRequest $request, string $id)
    {
        return $this->PathologieServices->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->PathologieServices->destroy($id);
    }
}
