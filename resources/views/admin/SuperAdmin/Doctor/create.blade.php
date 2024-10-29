@extends('admin.layouts.layout')

@section('content')
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">Doctor Information Create</div>
    <div class="pl-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('doctor.index') }}"><i class='bx bx-home-alt'></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Form for creating new Doctor details -->
<div class="row">
    <div class="col-12 col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Add New Doctor Information</h5>
            </div>
            <div class="card-body">
                <div class="form-body">
                    <form action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <!-- Name -->
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Name" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Designation -->
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" value="{{old('designation')}}" name="designation" placeholder="Designation" />
                            @error('designation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Qualifications -->
                        <div class="form-group">
                            <label>Qualifications</label>
                            <textarea class="form-control" name="qualifications" value="{{old('qualifications')}}" placeholder="Qualifications"></textarea>
                            @error('qualifications')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Expertise -->
                        <div class="form-group">
                            <label>Expertise In</label>
                            <textarea class="form-control" name="expert_in" value="{{old('expert_in')}}" placeholder="Expertise"></textarea>
                            @error('expert_in')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Organisation -->
                        <div class="form-group">
                            <label>Organisation</label>
                            <input type="text" class="form-control" name="organisation" value="{{old('organisation')}}" placeholder="Organisation" />
                            @error('organisation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Contact Number -->
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" name="contact_number" value="{{old('contact_number')}}" placeholder="Contact Number" />
                            @error('contact_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Social Media Links -->
                        <div class="form-group">
                            <label>Facebook Link</label>
                            <input type="url" class="form-control" name="facebook_link" value="{{old('facebook_link')}}" placeholder="Facebook Link" />
                            @error('facebook_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Pinterest Link</label>
                            <input type="url" class="form-control" name="pinterest_link" value="{{old('pinterest_link')}}" placeholder="Pinterest Link" />
                            @error('pinterest_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Twitter Link</label>
                            <input type="url" class="form-control" name="twitter_link" value="{{old('twitter_link')}}" placeholder="Twitter Link" />
                            @error('twitter_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Chamber 1 Information -->
                        <div class="form-group">
                            <label>Chamber Name</label>
                            <input type="text" class="form-control" name="chamber_1_name" value="{{old('chamber_1_name')}}" placeholder="Chamber Name" />
                            @error('chamber_1_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Chamber Address</label>
                            <textarea class="form-control" name="chamber_1_address" value="{{old('chamber_1_address')}}" placeholder="Chamber Address"></textarea>
                            @error('chamber_1_address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Visiting Hour</label>
                            <input type="text" class="form-control" name="chamber_1_contact_number" value="{{old('chamber_1_contact_number')}}" placeholder="Visiting Hour" />
                            @error('chamber_1_contact_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Division</label>
                            <select  id="select-division" name="division_id"  class="form-control w-100">
                                <option value="">Select Division</option>
                                @foreach ($division as $division) <!-- Assume $divisions contains division data -->
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
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
                        <div class="form-group">
                            <label>Sub District</label>
                            <select id="select-subdistrict" name="sub_district_id" class="form-control w-100">
                                <option value="">Select District</option>
                                <!-- District options will be populated dynamically -->
                            </select>
                        </div>

                        <!-- Hospital -->
                        <div class="form-group">
                            <label>Hospital</label>
                            <select name="hospital_id" class="form-control">
                                <option value="">Select Hospital</option>
                                @foreach ($hospital as $hospital)
                                    <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                                @endforeach
                            </select>
                            @error('hospital_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Photo Upload -->
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" class="form-control" name="photo" />
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Create</button>
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
</script>
@endsection
