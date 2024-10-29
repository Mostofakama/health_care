@include('Home.Header')

<section >
    <section class="container-custom m-2">
        <div class="row p-4 bg-success">
            <div class="section-title text-center m-2 text-bold">
                <h2 class="text-light">Find Diagnostic & Hospital</h2>
            </div>

            <div class="form-group col-lg-3 col-3 p-2">
                <form action="{{ route('search.diagnostic') }}" method="GET">
                    @csrf
                    <label>Division</label>
                    <select id="select-division" name="division_id" class="form-select  ">
                        <option value="">Select Division</option>
                        @foreach ($division as $division)
                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                        @endforeach
                    </select>
                    @error('division_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
            </div>

            <div class="form-group col-lg-3 col-3 p-2">
                <label>District</label>
                <select id="select-district" name="district_id" class="form-select  ">
                    <option value="">Select District</option>
                </select>
                @error('district_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group col-lg-3 col-3 p-2">
                <label>Sub District</label>
                <select id="select-subdistrict" name="sub_district_id" class="form-select  ">
                    <option value="">Select Subdistrict</option>
                </select>
                @error('sub_district_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-lg-3 col-3 p-2 text-center">
                <button class="btn btn-outline-light btn-rounded mt-4 w-100" type="submit">Search</button>
            </div>

            </form>

        </div>
    </section>

    <div class="container-custom">
        <div class="row p-5">
            <div class="col-md-12 text-center">
                <h2 class="fw-bold my-4">Hospital &amp; Diagnostic Lab</h2>
            </div>
            @if (count($hospital) > 0)

                @foreach ($hospital as $hospital)
                <div class="col-md-4 my-3">
                <div class="card">
                    <div class="d-flex align-items-center justify-content-center" style="height: 250px">
                        <img src="{{ asset('uploads/img/hospital/' . $hospital->photo) }}"
                            class="w-50" alt="">
                    </div>
                    <h4 class="text-center px-3" style="height: 50px">
                        {{$hospital->name}}</h4>
                    <div class="row p-3">
                        <div class="col-6 text-center">
                            <a href="{{route('home.doctor.list.hospital',$hospital->id)}}" class="d-block btn btn-success">
                                Doctor List
                            </a>
                        </div>
                        <div class="col-6 text-center">
                            <a href="{{route('home.Pathology.list.hospital',$hospital->id)}}" class="d-block btn btn-primary">
                                Pathology
                            </a>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach





            @else
            <h2 class="text-center " style="height: 60vh;">Doctor Not Found</h2>
            @endif












        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var divisionSelect = document.getElementById('select-division');
        var districtSelect = document.getElementById('select-district');
        var subdistrictSelect = document.getElementById('select-subdistrict');
        var doctorMainSection = document.getElementById('doctor-list');

        // Data from the controller
        const districts = @json($district);
        const subdistricts = @json($subdistrict);

        // Logging the doctors to ensure data is coming through
        //console.log(doctors);

        // Populate districts based on selected division
        divisionSelect.addEventListener('change', function() {
            const selectedDivisionId = divisionSelect.value;
            districtSelect.innerHTML = '<option value="">Select District</option>';
            subdistrictSelect.innerHTML = '<option value="">Select Subdistrict</option>';

            const filteredDistricts = districts.filter(district => district.division_id ==
                selectedDivisionId);
            filteredDistricts.forEach(district => {
                const option = document.createElement('option');
                option.value = district.id;
                option.textContent = district.name;
                districtSelect.appendChild(option);
            });
        });

        // Populate subdistricts based on selected district
        districtSelect.addEventListener('change', function() {
            const selectedDistrictId = districtSelect.value;
            subdistrictSelect.innerHTML = '<option value="">Select Subdistrict</option>';

            const filteredSubdistricts = subdistricts.filter(subdistrict => subdistrict.district_id ==
                selectedDistrictId);
            filteredSubdistricts.forEach(subdistrict => {
                const option = document.createElement('option');
                option.value = subdistrict.id;
                option.textContent = subdistrict.name;
                subdistrictSelect.appendChild(option);
            });
        });


    });
</script>

@include('Home.Footer')
