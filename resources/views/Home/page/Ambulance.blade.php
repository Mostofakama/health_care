@include('Home.Header')

<div id="Organisationlist" class="container-fluid p-5">
    <h2 class="text-center p-5">Ambulance List</h2>
    <div class="row pb-4">
        @if (count($ambulances) > 0)
            @foreach ($ambulances as $ambulance)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
                    <div class="card p-4 shadow h-100">

                        <h4 class="card-title text-center mb-3 mt-2">
                            <a href="#" style="text-decoration: none; color: #000;">{{ $ambulance->name }}</a>
                        </h4>
                        <div>
                            <p class="fw-bold text-center">Address</p>
                            <p class="text-center">{{ $ambulance->address }}</p>
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
                            <a href="#" class="btn btn-success d-block mx-2">Order Ambulance</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h2 class="text-center" style="height: 60vh;">Ambulance Not Found</h2>
        @endif
    </div>
</div>
@include('Home.Footer')
