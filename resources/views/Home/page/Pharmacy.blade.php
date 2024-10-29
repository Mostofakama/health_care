@include('Home.Header')
<section>
    <section class="container-custom m-2">
        <div class="row p-4 bg-success">
            <div class="section-title text-center m-2 text-bold">
                <h2 class="text-light">Find Doctor</h2>
            </div>
            <!-- Form Section -->
            <form action="{{ route('pharmacy.list') }}" method="GET" class="row">
                @csrf
                <div class="form-group col-lg-3 col-md-6 col-sm-12 p-2">
                    <label>Division</label>
                    <select id="select-division" name="division_id" class="form-select">
                        <option value="">Select Division</option>
                        @foreach ($division as $division)
                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                        @endforeach
                    </select>
                    @error('division_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-lg-3 col-md-6 col-sm-12 p-2">
                    <label>District</label>
                    <select id="select-district" name="district_id" class="form-select">
                        <option value="">Select District</option>
                    </select>
                    @error('district_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-lg-3 col-md-6 col-sm-12 p-2">
                    <label>Sub District</label>
                    <select id="select-subdistrict" name="sub_district_id" class="form-select">
                        <option value="">Select Subdistrict</option>
                    </select>
                    @error('sub_district_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 p-2 text-center">
                    <button class="btn btn-outline-light btn-rounded mt-4 w-100" type="submit">Search</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Pharmacy List Section -->
    <div id="Organisationlist" class="container-fluid p-5">
        <h2 class="text-center p-5">Pharmacy List</h2>
        <div class="row pb-4">
            @if (count($pharmacy) > 0)
                @foreach ($pharmacy as $pharmacy)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                        <div class="card p-4 shadow h-100">
                            <div class="d-flex align-items-center justify-content-center" style="height: 250px;">
                                <img src="{{ asset('uploads/img/pharmacy/' . $pharmacy->photo) }}" class="w-50" alt="">
                            </div>
                            <h4 class="card-title text-center mb-3 mt-2">
                                <a href="#" style="text-decoration: none; color: #000;">{{ $pharmacy->name }}</a>
                            </h4>
                            <div>
                                <p class="fw-bold text-center">Address</p>
                                <p class="text-center">{{ $pharmacy->address }}</p>
                                <div class="d-flex justify-content-evenly social">
                                    <a class="link" data-sharer="facebook" data-url="#">
                                        <i class="fab fa-facebook-square fa-1x" style="color: #3b5999"></i>
                                    </a>
                                    <a class="link" style="color: #337ab7" data-sharer="twitter" data-url="#">
                                        <i class="fab fa-twitter-square fa-1x"></i>
                                    </a>
                                    <a class="link" data-sharer="email" data-url="#">
                                        <i class="fab fa-pinterest fa-1x" style="color: #bd081c"></i>
                                    </a>
                                    <a class="link" data-sharer="email" data-url="#">
                                        <i class="fas fa-envelope fa-1x" style="color: #3b60c4"></i>
                                    </a>
                                </div>
                                <br>
                                <a href="#" class="btn btn-success d-block mx-2">Order Medicine</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-center" style="height: 60vh;">Pharmacy Not Found</h2>
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
<style>
    /* Responsive adjustments */
    @media (max-width: 576px) {
        .form-group {
            margin-bottom: 15px;
        }
    }
</style>
