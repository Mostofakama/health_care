@include('Home.Header')
<section>
    <div id="doctormain_section" class="container-fluid">
        <div class="row py-3 px-4">
            <div class="col-md-12">
                <p class="search-item-name fw-bold">Search Results for : <span class="text-primary">Arthroscopic
                        Surgery-Knees &amp; Shoulder</span>
                </p>
            </div>
           @foreach ($doctor as $doctor)
           <div class="col-lg-3 col-md-6 text-center mb-3">
            <div class="doctor_section card p-4 Larger shadow">
                <a href="{{route('single.doctor',$doctor->id)}}" >
                    <img style="width:200px;height:200px;object-fit:cover;" src="{{ asset('uploads/img/doctors/' . $doctor->photo) }}"
                        class="img-fluid rounded-circle" alt="" loading="lazy">
                </a>
                <h5 class="card-title mt-4"><a
                    href="{{route('single.doctor',$doctor->id)}}" style="color:#000;text-decoration: none;">{{$doctor->name}}</a></h5>
                <div class="">
                    <div class="card-body">
                        <div class="dr-cat-sing-spec">
                            <p><span class="fw-bold">Chamber</span><br>{{$doctor->chamber_1_name}},</p>
                            <p><span class="fw-bold">Visiting Hour</span><br> {{$doctor->chamber_1_address}}</p>
                            <p><span class="fw-bold">For Serial</span><br> {{$doctor->chamber_1_contact_number}}</p>
                            <div class="social-container pt-5">
                                <a class="link " href="{{$doctor->facebook_link}}" style="text-decoration: none;">
                                    <i class="fab fa-facebook-square fa-2x" style="color: #3b5999"></i>
                                </a>
                                <a class="link " href="{{$doctor->twitter_link}}" style="text-decoration: none;">
                                    <i class="fab fa-twitter-square fa-2x" style="color: #337ab7"></i>
                                </a>
                                <a class="link " href="{{$doctor->pinterest_link}}" style="text-decoration: none;">
                                    <i class="fab fa-pinterest fa-2x" style="color: #bd081c"></i>
                                </a>

                            </div><br><a href="{{route('single.doctor',$doctor->id)}}"
                                class="it24 btn btn-success text-capitalize d-block">More Chambers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           @endforeach

        </div>
    </div>
</section>


@include('Home.Footer')
