<?php

namespace App\Http\Controllers\Admin\Location;

use Illuminate\Http\Request;
use App\Services\DivisionServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Division\StoreRequest;
use App\Http\Requests\Admin\Division\UpdateRequest;

class DivisionController extends Controller
{
     protected $DivisionServices;

    public function __construct(DivisionServices $DivisionServices)
    {
        $this->DivisionServices = $DivisionServices;
    }
    public function index()
    {
        return $this->DivisionServices->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->DivisionServices->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        return $this->DivisionServices->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->DivisionServices->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->DivisionServices->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        return $this->DivisionServices->update($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        return $this->DivisionServices->destroy($id);
    }
}
