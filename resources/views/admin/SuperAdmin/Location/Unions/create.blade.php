@extends('admin.layouts.layout')


@section('content')
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">Unions</div>
    <div class="pl-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{route('unions.index')}}"><i class='bx bx-home-alt'></i></a>
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
                <h5 class="mb-0">Unions Add</h5>
            </div>
            <div class="card-body">
                <div class="form-body">
                    <form action="{{route('unions.store')}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label>Unions Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name"/>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Division</label>
                            <select id="select-division" name="division_id" class="form-control w-100">
                                <option value="">Select Division</option>
                                @foreach ($division as $division) <!-- Assume $divisions contains division data -->
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                @endforeach
                            </select>
                            @error('division_id')
                            <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="form-group">
                            <label>District</label>
                            <select id="select-district" name="district_id" class="form-control w-100">
                                <option value="">Select District</option>
                                <!-- District options will be populated dynamically -->
                            </select>
                            @error('district_id')
                            <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="form-group">
                            <label>Sub District</label>
                            <select id="select-subdistrict" name="sub_district_id" class="form-control w-100">
                                <option value="">Select District</option>
                                <!-- District options will be populated dynamically -->
                            </select>
                            @error('sub_district_id')
                            <span class="text-danger">{{ $message }}</span>
                           @enderror
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
    const districts = @json($district);
    const subdistrict = @json($subdistrict);


    divisionSelect.addEventListener('change', function() {
        var selectedDivisionId = divisionSelect.value;


        districtSelect.innerHTML = '<option value="">Select District</option>';
        subdistrictSelect.innerHTML = '<option value="">Select Subdistrict</option>';


        var filteredDistricts = districts.filter(function(district) {
            return district.division_id == selectedDivisionId;
        });


        filteredDistricts.forEach(function(district) {
            var option = document.createElement('option');
            option.value = district.id;
            option.textContent = district.name;
            districtSelect.appendChild(option);
        });
    });


    districtSelect.addEventListener('change', function() {
        var selectedDistrictId = districtSelect.value;


        subdistrictSelect.innerHTML = '<option value="">Select Subdistrict</option>';


        var filteredSubDistricts = subdistrict.filter(function(subdistrict) {
            return subdistrict.district_id == selectedDistrictId;
        });


        filteredSubDistricts.forEach(function(subdistrict) {
            var option = document.createElement('option');
            option.value = subdistrict.id;
            option.textContent = subdistrict.name;
            subdistrictSelect.appendChild(option);
        });
    });
});

</script>

@endsection
