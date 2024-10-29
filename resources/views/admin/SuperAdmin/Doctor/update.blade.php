@extends('admin.layouts.layout')

@section('content')
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">Doctor Information Update</div>
    <div class="pl-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('doctor.index') }}"><i class='bx bx-home-alt'></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Update</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Form for updating Doctor details -->
<div class="row">
    <div class="col-12 col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Update Doctor Information</h5>
            </div>
            <div class="card-body">
                <div class="form-body">
                    <form action="{{ route('doctor.update', $doctor->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" value="{{ old('name', $doctor->name) }}" name="name" placeholder="Name" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Designation -->
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" value="{{ old('designation', $doctor->designation) }}" name="designation" placeholder="Designation" />
                            @error('designation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Qualifications -->
                        <div class="form-group">
                            <label>Qualifications</label>
                            <textarea class="form-control" name="qualifications" placeholder="Qualifications">{{ old('qualifications', $doctor->qualifications) }}</textarea>
                            @error('qualifications')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Expertise -->
                        <div class="form-group">
                            <label>Expertise In</label>
                            <textarea class="form-control" name="expert_in" placeholder="Expertise">{{ old('expert_in', $doctor->expert_in) }}</textarea>
                            @error('expert_in')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Organisation -->
                        <div class="form-group">
                            <label>Organisation</label>
                            <input type="text" class="form-control" name="organisation" value="{{ old('organisation', $doctor->organisation) }}" placeholder="Organisation" />
                            @error('organisation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email', $doctor->email) }}" placeholder="Email" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Contact Number -->
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" class="form-control" name="contact_number" value="{{ old('contact_number', $doctor->contact_number) }}" placeholder="Contact Number" />
                            @error('contact_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Social Media Links -->
                        <div class="form-group">
                            <label>Facebook Link</label>
                            <input type="url" class="form-control" name="facebook_link" value="{{ old('facebook_link', $doctor->facebook_link) }}" placeholder="Facebook Link" />
                            @error('facebook_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Pinterest Link</label>
                            <input type="url" class="form-control" name="pinterest_link" value="{{ old('pinterest_link', $doctor->pinterest_link) }}" placeholder="Pinterest Link" />
                            @error('pinterest_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Twitter Link</label>
                            <input type="url" class="form-control" name="twitter_link" value="{{ old('twitter_link', $doctor->twitter_link) }}" placeholder="Twitter Link" />
                            @error('twitter_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Chamber 1 Information -->
                        <div class="form-group">
                            <label>Chamber Name</label>
                            <input type="text" class="form-control" name="chamber_1_name" value="{{ old('chamber_1_name', $doctor->chamber_1_name) }}" placeholder="Chamber Name" />
                            @error('chamber_1_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Chamber Address</label>
                            <textarea class="form-control" name="chamber_1_address" placeholder="Chamber Address">{{ old('chamber_1_address', $doctor->chamber_1_address) }}</textarea>
                            @error('chamber_1_address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Visiting Hour</label>
                            <input type="text" class="form-control" name="chamber_1_contact_number" value="{{ old('chamber_1_contact_number', $doctor->chamber_1_contact_number) }}" placeholder="Visiting Hour" />
                            @error('chamber_1_contact_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Division, District, Sub-District Fields -->
                        <div class="form-group">
                            <label>Division</label>
                            <select id="select-division" name="division_id" class="form-control w-100">
                                <option value="">Select Division</option>
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}" {{ $doctor->division_id == $division->id ? 'selected' : '' }}>
                                        {{ $division->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>District</label>
                            <select id="select-district" name="district_id" class="form-control w-100" data-selected="{{ $doctor->district_id }}">
                                <option value="">Select District</option>
                                {{-- @foreach ($districts as $district)
                                    <option value="{{ $district->id }}" {{ $doctor->district_id == $district->id ? 'selected' : '' }}>
                                        {{ $district->name }}
                                    </option>
                                @endforeach --}}
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sub District</label>
                            <select id="select-subdistrict" name="subdistrict_id" class="form-control w-100" data-selected="{{ $doctor->subdistrict_id }}">
                                <option value="">Select Subdistrict</option>
                            </select>
                        </div>

                        <!-- Photo Upload -->
                        <div class="form-group">
                            <label>Photo</label>
                            <input type="file" class="form-control" name="photo" />
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const divisionSelect = document.getElementById('select-division');
    const districtSelect = document.getElementById('select-district');
    const subdistrictSelect = document.getElementById('select-subdistrict');

    const districts = @json($districts);
    const subdistricts = @json($subdistricts);

    function populateDropdowns() {
        const selectedDivisionId = divisionSelect.value || '{{ $doctor->division_id }}';
        const selectedDistrictId = districtSelect.getAttribute('data-selected') || '{{ $doctor->district_id }}';
        const selectedSubdistrictId = subdistrictSelect.getAttribute('data-selected') || '{{ $doctor->subdistrict_id }}';

        console.log("Selected Division ID:", selectedDivisionId);
        console.log("Selected District ID:", selectedDistrictId);
        console.log("Selected Subdistrict ID:", selectedSubdistrictId);

        // Populate districts based on selected division
        districtSelect.innerHTML = '<option value="">Select District</option>';
        const filteredDistricts = districts.filter(district => district.division_id == selectedDivisionId);
        filteredDistricts.forEach(district => {
            const option = document.createElement('option');
            option.value = district.id;
            option.textContent = district.name;
            option.selected = (district.id == selectedDistrictId);
            districtSelect.appendChild(option);
        });

        // Populate subdistricts based on selected district
        subdistrictSelect.innerHTML = '<option value="">Select Subdistrict</option>';
        const filteredSubdistricts = subdistricts.filter(subdistrict => subdistrict.district_id == selectedDistrictId);
        filteredSubdistricts.forEach(subdistrict => {
            const option = document.createElement('option');
            option.value = subdistrict.id;
            option.textContent = subdistrict.name;
            option.selected = (subdistrict.id == 1);
            subdistrictSelect.appendChild(option);
        });
    }

    // Event listeners for updating dropdowns on change
    divisionSelect.addEventListener('change', () => {
        districtSelect.setAttribute('data-selected', '');
        subdistrictSelect.setAttribute('data-selected', '');
        populateDropdowns();
    });

    districtSelect.addEventListener('change', () => {
        subdistrictSelect.setAttribute('data-selected', '');
        populateDropdowns();
    });

    // Initial population on load
    populateDropdowns();
});


</script>
@endsection

