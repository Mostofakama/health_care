@include('Home.Header')
<section class="dorctr_pofile my-5 pt-5">
    <div class="container card shadow">

        <div class="row">
            <div class="col-md-12 my-5">
                <img  src="{{ asset('uploads/img/doctors/' . $doctor->photo) }}"
                    class="img-fluid mx-auto d-block rounded-circle" alt="">
                <h4 class="card-title text-center my-4"><a href="#" style="text-decoration: none;color:#000;margin-top:10px;">{{$doctor->name}}</a></h4>
                <hr class="shadow">
            </div>
            <div class="col-lg-6 col-12 card border-0 p-5">
                <h6 class="fw-bold mt-2">Designation:</h6>
                <p>{{$doctor->designation}}</p>
                <h6 class="fw-bold">Qualifications:</h6>
                <p>{{$doctor->qualifications}}</p>
                <h6 class="fw-bold"><b>Expert in</b>:</h6>
                <p>{{$doctor->expert_in}}</p>
                <h6 class="fw-bold"><b>Designation</b>:</h6>
                <p>{{$doctor->designation}}</p>
                <h6 class="fw-bold"><b>Organisation</b>:</h6>
                <p>{{$doctor->organisation}}</p>
                <br>
                <div class="float-end social">
                    <h6 class="fw-bold">Share</h6>
                    <a class="link " href="{{$doctor->facebook_link}}" style="text-decoration: none;">
                        <i class="fab fa-facebook-square fa-2x" style="color: #3b5999"></i>
                    </a>
                    <a class="link " href="{{$doctor->twitter_link}}" style="text-decoration: none;">
                        <i class="fab fa-twitter-square fa-2x" style="color: #337ab7"></i>
                    </a>
                    <a class="link " href="{{$doctor->pinterest_link}}" style="text-decoration: none;">
                        <i class="fab fa-pinterest fa-2x" style="color: #bd081c"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-12 card p-5 mb-3 border-0">
                <div>
                    <b class="fw-bold">Chamber</b> <br>
                    {{$doctor->chamber_1_name}} <br>
                    {{$doctor->chamber_1_address}} <br>
                    <a href="tel:01746-500717, 031-657360, Mail: mdhye36th@yahoo.com" style="text-decoration: none;color:#000;margin-top:10px;">{{$doctor->chamber_1_contact_number}}</a>
                    <br>
                    <br><br>

                </div>
                <br>
            </div>
        </div>





    </div>
</section>


@include('Home.Footer')
