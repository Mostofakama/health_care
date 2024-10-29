@extends('admin.layouts.layout')

@section('content')
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">Pharmacy </div>
    <div class="pl-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('pharmacy.index') }}"><i class='bx bx-home-alt'></i></a></li>
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
                <h5 class="mb-0">Update Pharmacy Information</h5>
            </div>
            <div class="card-body">
                <div class="form-body">
                    <form action="{{ route('pharmacy.update', $pharmacy->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>pharmacy Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name', $pharmacy->name) }}" placeholder="Name" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Division</label>
                            <select id="select-division" name="division_id" class="form-control w-100">
                                <option value="">Select Division</option>
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}" {{ $pharmacy->division_id == $division->id ? 'selected' : '' }}>
                                        {{ $division->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>District</label>
                            <select id="select-district" name="district_id" class="form-control w-100" data-selected="{{ $pharmacy->district_id }}">
                                <option value="">Select District</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}" {{ $pharmacy->district_id == $district->id ? 'selected' : '' }}>
                                        {{ $district->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sub District</label>
                            <select id="select-subdistrict" name="subdistrict_id" class="form-control w-100" data-selected="{{ $pharmacy->subdistrict_id }}">
                                <option value="">Select Subdistrict</option>
                                @foreach ($subdistricts as $subdistrict)
                                    <option value="{{ $subdistrict->id }}" {{ $pharmacy->subdistrict_id == $subdistrict->id ? 'selected' : '' }}>
                                        {{ $subdistrict->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" name="contact_number" value="{{ old('contact_number', $pharmacy->contact_number) }}" placeholder="Contact Number" />
                            @error('contact_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email', $pharmacy->email) }}" placeholder="Email" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Type</label>
                            <select id="select-type" name="type" class="form-control w-100">
                                <option value="">Select Type</option>
                                <option value="Public" {{ $pharmacy->type == 'Public' ? 'selected' : '' }}>Public</option>
                                <option value="Private" {{ $pharmacy->type == 'Private' ? 'selected' : '' }}>Private</option>
                                <option value="Government" {{ $pharmacy->type == 'Government' ? 'selected' : '' }}>Government</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>License Number</label>
                            <input type="text" class="form-control" name="license_number" value="{{ old('license_number', $pharmacy->license_number) }}" placeholder="License Number" />
                            @error('license_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="{{$pharmacy->address}}" placeholder="Address"/>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Hospital Type</label>
                            <input type="text" class="form-control" name="type_pharmacies" value="{{$pharmacy->type_pharmacies}}" placeholder="Pharmacy Type"/>
                            @error('type_pharmacies')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" class="form-control" name="photo" />
                            <input type="text" hidden  class="form-control" name="old_photo" value="{{$pharmacy->photo}}"/>
                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div>
                                @if ($pharmacy->photo)
                                    <img src="{{ asset('uploads/img/pharmacy/' . $pharmacy->photo) }}" alt="pharmacy Image" width="100">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var divisionSelect = document.getElementById('select-division');
        var districtSelect = document.getElementById('select-district');
        var subdistrictSelect = document.getElementById('select-subdistrict');

        // Fetching the available districts and subdistricts from the blade template
        const districts = @json($districts);
        const subdistricts = @json($subdistricts);

        // When the division changes, filter and populate the district dropdown
        divisionSelect.addEventListener('change', function() {
            var selectedDivisionId = divisionSelect.value;

            // Clear the district and subdistrict options
            districtSelect.innerHTML = '<option value="">Select District</option>';
            subdistrictSelect.innerHTML = '<option value="">Select Subdistrict</option>';

            // Filter districts based on the selected division
            var filteredDistricts = districts.filter(function(district) {
                return district.division_id == selectedDivisionId;
            });

            // Add the filtered districts to the district dropdown
            filteredDistricts.forEach(function(district) {
                var option = document.createElement('option');
                option.value = district.id;
                option.textContent = district.name;
                districtSelect.appendChild(option);
            });
        });

        // When the district changes, filter and populate the subdistrict dropdown
        districtSelect.addEventListener('change', function() {
            var selectedDistrictId = districtSelect.value;

            // Clear the subdistrict options
            subdistrictSelect.innerHTML = '<option value="">Select Subdistrict</option>';

            // Filter subdistricts based on the selected district
            var filteredSubdistricts = subdistricts.filter(function(subdistrict) {
                return subdistrict.district_id == selectedDistrictId;
            });

            // Add the filtered subdistricts to the subdistrict dropdown
            filteredSubdistricts.forEach(function(subdistrict) {
                var option = document.createElement('option');
                option.value = subdistrict.id;
                option.textContent = subdistrict.name;
                subdistrictSelect.appendChild(option);
            });
        });

        // Pre-select the existing district and subdistrict if available
        var selectedDivisionId = divisionSelect.value;
        var selectedDistrictId = districtSelect.getAttribute('data-selected');
        var selectedSubdistrictId = subdistrictSelect.getAttribute('data-selected');

        if (selectedDivisionId) {
            var filteredDistricts = districts.filter(function(district) {
                return district.division_id == selectedDivisionId;
            });

            filteredDistricts.forEach(function(district) {
                var option = document.createElement('option');
                option.value = district.id;
                option.textContent = district.name;
                option.selected = (district.id == selectedDistrictId);
                districtSelect.appendChild(option);
            });

            if (selectedDistrictId) {
                var filteredSubdistricts = subdistricts.filter(function(subdistrict) {
                    return subdistrict.district_id == selectedDistrictId;
                });

                filteredSubdistricts.forEach(function(subdistrict) {
                    var option = document.createElement('option');
                    option.value = subdistrict.id;
                    option.textContent = subdistrict.name;
                    option.selected = (subdistrict.id == selectedSubdistrictId);
                    subdistrictSelect.appendChild(option);
                });
            }
        }
    });
</script>
@endsection
