@extends('admin.layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">{{ $pharmacy->name }}</h5>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('uploads/img/pharmacy/' . $pharmacy->photo) }}" alt="pharmacy Photo" class="img-fluid rounded" width="300">
                    </div>

                    <h6 class="card-title">Contact Information</h6>
                    <p class="card-text"><strong>Contact Number:</strong> {{ $pharmacy->contact_number }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $pharmacy->email }}</p>

                    <h6 class="card-title">Location</h6>
                    <p class="card-text"><strong>Division:</strong> {{ $pharmacy->division->name }}</p>
                    <p class="card-text"><strong>District:</strong> {{ $pharmacy->district->name }}</p>
                    <p class="card-text"><strong>Sub-District:</strong> {{ $pharmacy->subdistrict->name }}</p>

                    <h6 class="card-title">Details</h6>
                    <p class="card-text"><strong>Type:</strong> {{ $pharmacy->type }}</p>
                    <p class="card-text"><strong>License Number:</strong> {{ $pharmacy->license_number }}</p>

                    {{-- <div class="mt-4">
                        <a href="{{ route('pharmacy.edit', $pharmacy->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('pharmacy.index') }}" class="btn btn-secondary">Back to List</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
