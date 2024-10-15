@extends('admin.layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">{{ $hospital->name }}</h5>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('uploads/img/hospital/' . $hospital->photo) }}" alt="Hospital Photo" class="img-fluid rounded" width="300">
                    </div>

                    <h6 class="card-title">Contact Information</h6>
                    <p class="card-text"><strong>Contact Number:</strong> {{ $hospital->contact_number }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $hospital->email }}</p>

                    <h6 class="card-title">Location</h6>
                    <p class="card-text"><strong>Division:</strong> {{ $hospital->division->name }}</p>
                    <p class="card-text"><strong>District:</strong> {{ $hospital->district->name }}</p>
                    <p class="card-text"><strong>Sub-District:</strong> {{ $hospital->subdistrict->name }}</p>

                    <h6 class="card-title">Details</h6>
                    <p class="card-text"><strong>Type:</strong> {{ $hospital->type }}</p>
                    <p class="card-text"><strong>License Number:</strong> {{ $hospital->license_number }}</p>

                    {{-- <div class="mt-4">
                        <a href="{{ route('hospital.edit', $hospital->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('hospital.index') }}" class="btn btn-secondary">Back to List</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
