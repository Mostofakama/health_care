<?php

namespace App\Http\Controllers\Admin\Pharmacie;

use Illuminate\Http\Request;
use App\Services\PharmacieServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pharmacie\PharmacieStoreRequest;
use App\Http\Requests\Admin\Pharmacie\PharmacieUpdateRequest;

class PharmacieController extends Controller
{
    protected $PharmacieServices;

    public function __construct(PharmacieServices $PharmacieServices){
        $this ->PharmacieServices = $PharmacieServices;
    }
    public function index()
    {
      return   $this->PharmacieServices->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return   $this->PharmacieServices->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PharmacieStoreRequest $request)
    {
        return   $this->PharmacieServices->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return   $this->PharmacieServices->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return   $this->PharmacieServices->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PharmacieUpdateRequest $request, string $id)
    {
        return   $this->PharmacieServices->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return   $this->PharmacieServices->destroy($id);
    }
}
