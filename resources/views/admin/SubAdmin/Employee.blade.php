
@extends('admin.layouts.layout')


@section('content')
<style>

    /* login  */

    </style>
       <section class="container-custom ">
        <div class=" login_section">
            <section id="formsection" class="row">
                <div class="col-sm-12 my-auto">
                    <form class="form-horizontal loginbox mt-2" action="{{route('Employee.store')}}" method="post">
                       @csrf
                        <h4>Employee signup</h4>
                        <div class="mb-4 InputWithIcon">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control"  name="name"
                                placeholder="Name" value="{{old('name')}}" >
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                               @enderror
                        </div>
                        <div class="mb-4 InputWithIcon">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email"
                                placeholder="Enter Email No."  value="{{old('email')}}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                               @enderror
                        </div>
                        <div class="form-group ">
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
                        <div class="form-group ">
                            <label>District</label>
                            <select id="select-district" name="district_id" class="form-control w-100">
                                <option value="">Select District</option>
                                <!-- District options will be populated dynamically -->
                            </select>
                            @error('district_id')
                            <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="form-group ">
                            <label>Sub District</label>
                            <select id="select-subdistrict" name="sub_district_id" class="form-control w-100">
                                <option value="">Select District</option>
                                <!-- District options will be populated dynamically -->
                            </select>
                            @error('sub_district_id')
                            <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="form-group ">
                            <label>Unions</label>
                            <select id="select-unions" name="union_id" class="form-control w-100">
                                <option value="">Select Unions</option>
                                <!-- District options will be populated dynamically -->
                            </select>
                            @error('union_id')
                            <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>


                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control"  placeholder=" Enter your Password"
                                 name="password">
                                 @error('password')
                                <span class="text-danger">{{ $message }}</span>
                               @enderror
                        </div>
                        <div class="submitbtn">
                            <button type="submit" class="btn btn-primary">Add New</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var divisionSelect = document.getElementById('select-division');
            var districtSelect = document.getElementById('select-district');
            var subdistrictSelect = document.getElementById('select-subdistrict');
            var unionsSelect = document.getElementById('select-unions');

            const districts = @json($district);
            const subdistrict = @json($subdistrict);
            const unions = @json($unions);

            // Populate districts when a division is selected
            divisionSelect.addEventListener('change', function() {
                var selectedDivisionId = divisionSelect.value;

                districtSelect.innerHTML = '<option value="">Select District</option>';
                subdistrictSelect.innerHTML = '<option value="">Select Subdistrict</option>';
                unionsSelect.innerHTML = '<option value="">Select Unions</option>';

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

            // Populate subdistricts when a district is selected
            districtSelect.addEventListener('change', function() {
                var selectedDistrictId = districtSelect.value;

                subdistrictSelect.innerHTML = '<option value="">Select Subdistrict</option>';
                unionsSelect.innerHTML = '<option value="">Select Unions</option>';

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

            // Populate unions when a subdistrict is selected
            subdistrictSelect.addEventListener('change', function() {
                var selectedSubDistrictId = subdistrictSelect.value;
                console.log(selectedSubDistrictId);

                unionsSelect.innerHTML = '<option value="">Select Unions</option>';

                var filteredUnions = unions.filter(function(union) {
                    return union.sub_district_id == selectedSubDistrictId;
                });

                filteredUnions.forEach(function(union) {
                    var option = document.createElement('option');
                    option.value = union.id;
                    option.textContent = union.name;
                    unionsSelect.appendChild(option);  // FIX: Append to unionsSelect instead of subdistrictSelect
                });
            });
        });

        </script>



@endsection
