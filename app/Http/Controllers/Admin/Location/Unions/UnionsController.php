<?php

namespace App\Http\Controllers\Admin\Location\Unions;

use Illuminate\Http\Request;
use App\Services\UnionsServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Unions\UnionsStoreRequest;
use App\Http\Requests\Admin\Unions\UnionsUpdateRequest;

class UnionsController extends Controller
{
    protected $UnionsServices;

    public function __construct(UnionsServices $UnionsServices)
    {
        $this->UnionsServices = $UnionsServices;
    }
    public function index()
    {
        return $this->UnionsServices->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->UnionsServices->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UnionsStoreRequest $request)
    {
        return $this->UnionsServices->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->UnionsServices->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UnionsUpdateRequest $request, string $id)
    {
        return $this->UnionsServices->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->UnionsServices->destroy($id);
    }
}
