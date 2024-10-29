@include('Home.Header')

<section >
    <section class="container-custom m-2">
        <div class="row p-4 bg-success">
            <div class="section-title text-center m-2 text-bold">
                <h2 class="text-light">Find Doctor</h2>
            </div>

            <div class="form-group col-lg-3 col-3 p-2">
                <form action="{{ route('search.doctor') }}" method="GET">
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

    <div id="doctormain_section" class="container-fluid">
        <div class="row py-3 px-4" id="doctor-list">
            @if (count($doctor) > 0)
                @foreach ($doctor as $doctor)
                    <div class="col-lg-3 col-md-6 text-center mb-3">
                        <div class="doctor_section card p-4 Larger shadow">
                            <a href="{{ route('single.doctor', $doctor->id) }}">
                                <img style="width:200px;height:200px;object-fit:cover;"
                                    src="{{ asset('uploads/img/doctors/' . $doctor->photo) }}"
                                    class="img-fluid rounded-circle" alt="" loading="lazy">
                            </a>
                            <h5 class="card-title mt-4"><a href="{{ route('single.doctor', $doctor->id) }}"
                                    style="color:#000;text-decoration: none;">{{ $doctor->name }}</a></h5>
                            <div class="">
                                <div class="card-body">
                                    <div class="dr-cat-sing-spec">
                                        <p><span class="fw-bold">Chamber</span><br>{{ $doctor->chamber_1_name }},</p>
                                        <p><span class="fw-bold">Visiting Hour</span><br>
                                            {{ $doctor->chamber_1_address }}</p>
                                        <p><span class="fw-bold">For Serial</span><br>
                                            {{ $doctor->chamber_1_contact_number }}</p>
                                        <div class="social-container pt-5">
                                            <a class="link " href="{{ $doctor->facebook_link }}"
                                                style="text-decoration: none;">
                                                <i class="fab fa-facebook-square fa-2x" style="color: #3b5999"></i>
                                            </a>
                                            <a class="link " href="{{ $doctor->twitter_link }}"
                                                style="text-decoration: none;">
                                                <i class="fab fa-twitter-square fa-2x" style="color: #337ab7"></i>
                                            </a>
                                            <a class="link " href="{{ $doctor->pinterest_link }}"
                                                style="text-decoration: none;">
                                                <i class="fab fa-pinterest fa-2x" style="color: #bd081c"></i>
                                            </a>

                                        </div><br><a href="{{ route('single.doctor', $doctor->id) }}"
                                            class="it24 btn btn-success text-capitalize d-block">More Chambers</a>
                                    </div>
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
