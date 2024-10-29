@extends('admin.layouts.layout')

@section('content')
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">Gallery</div>
    <div class="pl-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}"><i class='bx bx-home-alt'></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Update</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->

<div class="row">
    <div class="col-12 col-lg-7 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Update Gallery Information</h5>
            </div>
            <div class="card-body">
                <div class="form-body">
                    <form action="{{ route('gallery.update', $gallery->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')



                        <div class="form-group">
                            <label>gallery</label>
                            <input type="file" class="form-control" name="gallery" />
                            <input type="text" hidden  class="form-control" name="old_gallery" value="{{$gallery->gallery}}"/>
                            @error('gallery')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div>
                                @if ($gallery->gallery)
                                    <img src="{{ asset('uploads/img/gallery/' . $gallery->gallery) }}" alt="gallery Image" width="100">
                                @endif
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary px-4">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
