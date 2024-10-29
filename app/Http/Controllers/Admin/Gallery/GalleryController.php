<?php

namespace App\Http\Controllers\Admin\Gallery;

use Illuminate\Http\Request;
use App\Services\GalleryServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Gallery\GalleryStoreRequest;
use App\Http\Requests\Admin\Gallery\GalleryUpdateRequest;

class GalleryController extends Controller
{
    protected $GalleryServices;

    public function __construct(GalleryServices $GalleryServices){
        $this ->GalleryServices = $GalleryServices;
    }
    public function index()
    {
        return $this->GalleryServices->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->GalleryServices->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryStoreRequest $request)
    {
        return $this->GalleryServices->store($request);
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
        return $this->GalleryServices->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GalleryUpdateRequest $request, string $id)
    {
        return $this->GalleryServices->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->GalleryServices->destroy($id);
    }
}
