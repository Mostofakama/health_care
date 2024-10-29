    <!-- menu end -->
    @include('Home.Header')
    <section class="banner">
        @include('Home.Banner')
    </section>




    <!-- count -->
    <section class="count">
        @include('Home.Count')
    </section>




    <section class="Browse_On_Speciality">
        @include('Home.Services')
    </section>



    <!-- doctor  -->

    <section id="team" class="team team-bg py-5">
        <div class="container-custom">
            <div class="section-title text-center">
                <p class="main-team-heading">Doctors</p>
            </div>
            <div class="row">
                @foreach ($doctor as $doctor)
                    <div class="col-lg-6 my-2">
                        <div class="member d-flex align-items-start">
                            <div class="pic">
                                <img src="{{ asset('uploads/img/doctors/' . $doctor->photo) }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <p class="member-heading"><a href="{{ route('single.doctor', $doctor->id) }}">Dr
                                        {{ $doctor->name }}</a>
                                </p>
                                <span>{{ $doctor->expert_in }}</span>
                                <p class="member-para">{{ $doctor->qualifications }}</p>
                                <div class="social">
                                    <a href="{{ $doctor->twitter_link }}" style="color:#ffff;"><i
                                            class="fab fa-twitter team-icon"></i></a>

                                    <a href="{{ $doctor->facebook_link }}" style="color:#ffff;"><i
                                            class="fab fa-facebook-f team-icon"></i></a>
                                    <a href="{{ $doctor->pinterest_link }}" style="color:#ffff;"><i
                                            class="fa-brands fa-whatsapp team-icon"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>

        {{-- <div class="mt-3">
            {{ $doctor->links('pagination::bootstrap-4') }}
        </div> --}}
    </section>



    <div class="container-custom">
        <div class="row p-5">
            <div class="col-md-12 text-center">
                <h2 class="fw-bold my-4">Hospital & Diagnostic Lab</h2>
            </div>

            @foreach ($hospital as $hospital)
                <div class="col-lg-4 col-md-6 col-sm-12 my-3">
                    <div class="card h-100">
                        <div class="d-flex align-items-center justify-content-center" style="height: 250px;">
                            <img src="{{ asset('uploads/img/hospital/' . $hospital->photo) }}" class="w-50"
                                alt="Hospital Image">
                        </div>
                        <h4 class="text-center px-3 mt-3" style="height: 50px;">{{ $hospital->name }}</h4>
                        <div class="row p-3">
                            <div class="col-6 text-center">
                                <a href="{{ route('home.doctor.list.hospital', $hospital->id) }}"
                                    class="d-block btn btn-success">
                                    Doctor List
                                </a>
                            </div>
                            <div class="col-6 text-center">
                                <a href="{{ route('home.Pathology.list.hospital', $hospital->id) }}"
                                    class="d-block btn btn-primary">
                                    Pathology
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>





    <!-- blog -->
    <div class="gallery my-5">
        <div class="gallery container">
            <div class="section-title mt-5">
                <h2>Blog Post</h2>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class=" blogmainsection card">
                        <img src="https://e-healthbd.com/blog/wp-content/uploads/2021/02/Heart-Attack-Vs-Strock-2.jpg"
                            class=" blog_img" alt="Hollywood Sign on The Hill">
                        <div class="card-body">
                            <h5 class="card-title text-center">হার্ট এট্যাক ও স্ট্রোক কে কেন গুলিয়ে ফেলি আমরা !</h5>
                            <p class="card-text">
                                &amp;nbsp;
                                হার্ট এট্যাক ও স্ট্রোক কে আমরা প্রায়ই গুলিয়ে ফেলি। অধিকাংশ রোগীই এই দুটিকে একই সমস্যা
                                ধরে নেয়। আমরা এমন রোগী প্র......
                            </p>
                            <a href="#" class="btn btn-primary">Read
                                more</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class=" blogmainsection card">
                        <img src="https://e-healthbd.com/blog/wp-content/uploads/2020/07/960x0.jpg" class=" blog_img"
                            alt="Hollywood Sign on The Hill">
                        <div class="card-body">
                            <h5 class="card-title text-center">স্ট্রোক করলে কি করবেন এবং কি ধরনের চিকিৎসক দেখাবেন</h5>
                            <p class="card-text">
                                স্ট্রোক নিয়ে কিছু কথাঃ
                                স্ট্রোক হলে অধিকাংশ সময়েই এর প্রতিক্রিয়া তাৎক্ষনিকভাবে বোঝা যায় না। কেননা অনেকের
                                ক্ষেত্রেই স্ট্রোক হবার অন......
                            </p>
                            <a href="#" class="btn btn-primary">Read
                                more</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class=" blogmainsection card">
                        <img src="https://e-healthbd.com/blog/wp-content/uploads/2020/05/images.jpg" class=" blog_img"
                            alt="Hollywood Sign on The Hill">
                        <div class="card-body">
                            <h5 class="card-title text-center">রোগীদের মানসিকতা বনাম চিকিৎসা সেবা</h5>
                            <p class="card-text">
                                ঘটনা প্রবাহ- ০১
                                হঠাৎ ছোট ভাইয়ের এপেনডিক্স এর মারাত্মক ব্যথা শুরু হলে তাকে ন......
                            </p>
                            <a href="#" class="btn btn-primary">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Home.Footer')

    <!-- footer  -->
