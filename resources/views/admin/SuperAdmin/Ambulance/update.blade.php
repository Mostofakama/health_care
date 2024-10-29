@extends('admin.layouts.layout')


@section('content')
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">Ambulance</div>
    <div class="pl-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{route('ambulance.index')}}"><i class='bx bx-home-alt'></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Layouts</li>
            </ol>
        </nav>
    </div>
    <div class="ml-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javaScript:;">Action</a>
                <a class="dropdown-item" href="javaScript:;">Another action</a>
                <a class="dropdown-item" href="javaScript:;">Something else here</a>
                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javaScript:;">Separated link</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<div class="row">
    <div class="col-12 col-lg-7 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">ambulance Add</h5>
            </div>
            <div class="card-body">
                <div class="form-body">
                    <form action="{{route('ambulance.update',$ambulance->id)}}" method="post" >
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Ambulance Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{$ambulance->name}}"/>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ambulance Address</label>
                            <input type="text" class="form-control" name="address" value="{{$ambulance->address}}" placeholder="Address"/>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Division</label>
                            <select id="select-division" name="division_id" class="form-control w-100">
                                <option value="">Select Division</option>
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}" {{ $ambulance->division_id == $division->id ? 'selected' : '' }}>
                                        {{ $division->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>District</label>
                            <select id="select-district" name="district_id" class="form-control w-100" data-selected="{{ $ambulance->district_id }}">
                                <option value="">Select District</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}" {{ $ambulance->district_id == $district->id ? 'selected' : '' }}>
                                        {{ $district->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sub District</label>
                            <select id="select-subdistrict" name="subdistrict_id" class="form-control w-100" data-selected="{{ $ambulance->subdistrict_id }}">
                                <option value="">Select Subdistrict</option>
                                @foreach ($subdistricts as $subdistrict)
                                    <option value="{{ $subdistrict->id }}" {{ $ambulance->subdistrict_id == $subdistrict->id ? 'selected' : '' }}>
                                        {{ $subdistrict->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary px-4">Add</button>
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
        const districts = @json($district);
        const subdistricts = @json($subdistrict);

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
