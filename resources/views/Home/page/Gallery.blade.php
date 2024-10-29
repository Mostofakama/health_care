@include('Home.Header')

<section>
    <section class="bg-light pb-5">
        <div class="container gallery_section">
            <h2 class="text-center py-5">Gallery Image</h2>
            <div class="row">
                @foreach ($gallery as $gallery )
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <a class="elem shadow" href="#">
                        <span >
                            <img  src="{{ asset('uploads/img/gallery/' . $gallery->gallery) }}" alt="">
                        </span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</section>
@include('Home.Footer')
