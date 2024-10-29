@include('Home.Header')
<!-- menu end -->
<section class="container-custom ">
    <div class="visitor_from py-5 my-5" style="background-color: #082744;">
        <div class="section-title col-12">
            <h2 class="text-light text-center">Visitor Card Form</h2>
        </div>
        <form action="{{route('signup.store')}}" method="post"  class="php-email-form px-4">
           @csrf
            <div class="row text-light card-body">
                <div class=" col-lg-6 col-12 p-2">
                    <label for="visitor_name"  class="form-label">Name:<samp class="text-danger">*</samp></label>
                    <input type="text" class="form-control" name="visitor_name" value="{{old('visitor_name')}}" id="visitor_name"
                        placeholder="Your Name">
                        @error('visitor_name')
                        <span class="text-danger">{{ $message }}</span>
                       @enderror
                </div>
                <div class=" col-lg-6 col-12 p-2">
                    <label for="visitor_name" class="form-label">Father Name:<samp class="text-danger">*</samp></label>
                    <input type="text" class="form-control" name="father_name" value="{{old('father_name')}}" id="father_name"
                        placeholder="Father Name">
                        @error('father_name')
                        <span class="text-danger">{{ $message }}</span>
                       @enderror
                </div>



                <div class="col-lg-6 col-12 p-2">
                    <label for="visitor_mobile" class="form-label">Birth Date<samp class="text-danger">*</samp></label>
                    <input type="date" class="form-control" name="birth_date" value="{{old('birth_date')}}" id="my-input"
                        placeholder="Birth Date ">
                        @error('birth_date')
                        <span class="text-danger">{{ $message }}</span>
                       @enderror
                </div>


                <div class=" col-lg-6 col-12 p-2">
                    <label for="voter_id" class="form-label">Voter Id:<samp class="text-danger">*</samp></label>
                    <input type="number" class="form-control" name="voter_id" value="{{old('voter_id')}}" id="voter_id" placeholder="Voter Id">
                    @error('voter_id')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror
                </div>
                <div class=" col-lg-6 col-12 p-2">
                    <label for="mobile" class="form-label">Mobile:<samp class="text-danger">*</samp></label>
                    <input type="number" class="form-control" name="mobile" value="{{old('mobile')}}" id="mobile" placeholder="Voter Id">
                    @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror
                </div>
                <div class=" col-lg-6 col-12 p-2">
                    <label for="profession" class="form-label">Profession:<samp class="text-danger">*</samp></label>
                    <input type="text" class="form-control" name="profession" value="{{old('profession')}}" id="profession"
                        placeholder="Profession">
                        @error('profession')
                        <span class="text-danger">{{ $message }}</span>
                       @enderror
                    </div>

                <div class=" col-lg-6 col-12 p-2">
                    <label for="card_number" class="form-label">Card Number:<samp class="text-danger">*</samp></label>
                    <input type="number" class="form-control" name="card_number" value="{{old('card_number')}}" id="card_number"
                        placeholder="Card Number">
                        @error('card_number')
                        <span class="text-danger">{{ $message }}</span>
                       @enderror
                    </div>









                <div class="form-group col-lg-6 col-12 p-2">
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
                <div class="form-group col-lg-6 col-12 p-2">
                    <label>District</label>
                    <select id="select-district" name="district_id" class="form-control w-100">
                        <option value="">Select District</option>
                        <!-- District options will be populated dynamically -->
                    </select>
                    @error('district_id')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror
                </div>
                <div class="form-group col-lg-6 col-12 p-2">
                    <label>Sub District</label>
                    <select id="select-subdistrict" name="sub_district_id" class="form-control w-100">
                        <option value="">Select District</option>
                        <!-- District options will be populated dynamically -->
                    </select>
                    @error('sub_district_id')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror
                </div>
                <div class="form-group col-lg-6 col-12 p-2">
                    <label>Unions</label>
                    <select id="select-unions" name="union_id" class="form-control w-100">
                        <option value="">Select Unions</option>
                        <!-- District options will be populated dynamically -->
                    </select>
                    @error('union_id')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror
                </div>


                <div class="col-lg-6 col-12 p-2">
                    <label class="col-sm-4 control-label" for="visitor_gender">Gender</label>
                    <div class="col-sm-6">
                        <label class="radio-inline" for="male">
                            <input type="radio" name="visitor_gender" id="male" value="male" checked="">
                            Male</label>
                        <label class="radio-inline" for="female">
                            <input type="radio" name="visitor_gender" id="female" value="female">
                            Female</label>
                    </div>
                </div>

                <div class="col-lg-12 col-12 p-4 text-center">
                    <div class="d-grid col-6 mx-auto mt-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
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



@include('Home.Footer')
