@include('Home.Header')

<div class="container mt-5">
    <!-- Search Bar -->
    <div class="row mb-4">
        <div class="col-md-8 mx-auto">
            <form class="d-flex" role="search" action="{{ route('card.search') }}">
                <input class="form-control me-2" type="search" name="card_number" placeholder="Search Card Number..."
                    aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>

    <!-- User Search Results -->
    <div class="row">
        @if (count($user) > 0)
            <div class="col-md-10 mx-auto">
                @foreach ($user as $user)
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Card Holder Name: {{ $user->visitor_name }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Father's Name:</strong> {{ $user->father_name }}</p>
                                <p><strong>Date of Birth:</strong> {{ $user->birth_date }}</p>
                                <p><strong>Voter ID:</strong> {{ $user->voter_id }}</p>
                                <p><strong>Mobile:</strong> {{ $user->mobile }}</p>
                                <p><strong>Profession:</strong> {{ $user->profession }}</p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Card Number:</strong> {{ $user->card_number }}</p>
                                <p><strong>Gender:</strong> {{ $user->gender }}</p>
                                <p><strong>Division:</strong> {{ $user->division_name }}</p>
                                <p><strong>District:</strong> {{ $user->district_name }}</p>
                                <p><strong>Sub-District:</strong> {{ $user->subdistrict_name }}</p>
                                <p><strong>Union:</strong> {{ $user->union_name }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        @else
            <h2 class="text-center" style="height: 73vh;">Card Not Found</h2>
        @endif

    </div>
</div>

