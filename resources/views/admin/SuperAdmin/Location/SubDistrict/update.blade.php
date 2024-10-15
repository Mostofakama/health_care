@extends('admin.layouts.layout')

@section('content')
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">Sub District</div>
    <div class="pl-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{route('subdistrict.index')}}"><i class='bx bx-home-alt'></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Layouts</li>
            </ol>
        </nav>
    </div>
    <div class="ml-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                <a class="dropdown-item" href="javaScript:;">Action</a>
                <a class="dropdown-item" href="javaScript:;">Another action</a>
                <a class="dropdown-item" href="javaScript:;">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javaScript:;">Separated link</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<div class="row">
    <div class="col-12 col-lg-7 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">SubDistrict Add</h5>
            </div>
            <div class="card-body">
                <div class="form-body">
                    <form action="{{route('subdistrict.update',$subDistrict->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>SubDistrict Name</label>
                            <input type="text" class="form-control" name="name" value="{{$subDistrict->name ?? ''}}"/>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Division</label>
                            <select id="select-division" name="division_id" class="form-control w-100">
                                <option value="">Select Division</option>
                                @foreach ($division as $data)
                                    <option value="{{ $data->id }}"
                                        @if($data->id == ($subDistrict->division_id ?? '')) selected @endif>
                                        {{ $data->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>District</label>
                            <select id="select-district" name="district_id" class="form-control w-100">
                                <option value="">Select District</option>
                                <!-- District options will be populated dynamically -->
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
        const districts = @json($district);
        const subDistrict = @json($subDistrict);

        function populateDistricts(divisionId, selectedDistrictId = null) {
            districtSelect.innerHTML = '<option value="">Select District</option>';

            var filteredDistricts = districts.filter(function(district) {
                return district.division_id == divisionId;
            });

            filteredDistricts.forEach(function(district) {
                var option = document.createElement('option');
                option.value = district.id;
                option.textContent = district.name;
                if (district.id == selectedDistrictId) {
                    option.selected = true;
                }
                districtSelect.appendChild(option);
            });
        }

        // Populate districts when division is changed
        divisionSelect.addEventListener('change', function() {
            populateDistricts(divisionSelect.value);
        });

        // If editing an existing sub-district, pre-select division and district
        if (subDistrict) {
            populateDistricts(subDistrict.division_id, subDistrict.district_id);
        }
    });
</script>

@endsection
