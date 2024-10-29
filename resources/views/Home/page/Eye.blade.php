@include('Home.Header')

<section>
    <div id="Organisationlist" class="container-fluid p-5">
        <h2 class="text-center p-5">Eye Hospital List</h2>
        <div class="row pb-4">
            @if (count($eyeHospitals) > 0)
                @foreach ($eyeHospitals as $hospital)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                        <div class="card p-4 shadow h-100">
                            <div class="d-flex align-items-center justify-content-center" style="height: 250px;">
                                <img src="{{ asset('uploads/img/hospital/' . $hospital->photo) }}" class="w-50"
                                    alt="Dental Hospital Image">
                            </div>
                            <h4 class="card-title text-center mb-3 mt-2">
                                <a href="#" style="text-decoration: none; color: #000;">{{ $hospital->name }}</a>
                            </h4>
                            <div>
                                <p class="fw-bold text-center">Address</p>
                                <p class="text-center">{{ $hospital->address }}</p>
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
                                <a href="#" class="btn btn-primary d-block mx-2">Contact Hospital</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-center" style="height: 60vh;">Eye Hospitals Not Found</h2>
            @endif
        </div>
    </div>
</section>

@include('Home.Footer')
