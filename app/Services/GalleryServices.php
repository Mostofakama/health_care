<?php

namespace App\Services;

use App\Models\gallery;
use Illuminate\Support\Str;





class GalleryServices{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = gallery::paginate(6);
        return view('admin.SuperAdmin.Gallery.index', ['gallery' => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           return view('admin.SuperAdmin.Gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $request)
    {

       // Initialize file name as null in case no file is uploaded
    $fileName = null;

    // Check if a file was uploaded
    if ($request->hasFile('gallery')) {
        $file = $request->file('gallery');

        // Check if the file is valid before moving it
        if ($file->isValid()) {
            $img = $request->file('gallery');
            $ext = $img->getClientOriginalExtension();

            $fileName =Str::random(20)  . time() . '.' . $ext;
           // $fileName = time() . '.' . $file->getClientOriginalExtension();
            // $file->move(public_path('uploads'), $fileName);
            $img->move(public_path().'/uploads/img/gallery',$fileName);
        } else {
            // Handle invalid file upload
            return back()->withErrors(['gallery' => 'Invalid file upload.']);
        }
    }

    gallery::create([

            'gallery' =>$fileName ?? null,
        ]);

        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $gallery = gallery::findOrFail($id);


        return view('admin.SuperAdmin.Gallery.update', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $request,  $id)
    {

        $fileName = '';
        if ($request->hasFile('gallery')) {
            $gallery = gallery::findOrFail($id);
            $imagePath = public_path('uploads/img/hospital/' . $gallery->gallery);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $file = $request->file('gallery');
            $ext = $file->getClientOriginalExtension();
            $fileName = Str::random(20) . time(). '.'. $ext;
            $file->move(public_path().'/uploads/img/gallery', $fileName);
        }else{
           $fileName = $request->old_gallery;
        }

        gallery::where('id',$id)->update([
            'gallery' => $fileName,
        ]);

        return redirect()->route('gallery.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $gallery = gallery::findOrFail($id);


        $imagePath = public_path('uploads/img/gallery/' . $gallery->gallery);


        $gallery->delete();


        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        return redirect()->route('gallery.index')->with('success', 'SubDistrict and associated image deleted successfully');
    }
}
