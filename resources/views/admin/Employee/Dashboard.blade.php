@extends('admin.layouts.layout')

@section('content')
<div class="card-body">
    <form method="GET" action="{{ route('employee.dashboard') }}">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Search by Card Number or Mobile" value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Card Number</th>
                    <th>Mobile</th>
                    <th>Birth Date</th>
                    <th>Unions</th>
                    <th>Active</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $data)
                <tr>
                    <td>{{ $data->visitor_name }}</td>
                    <td>{{ $data->card_number }}</td>
                    <td>{{ $data->mobile }}</td>
                    <td>{{ $data->birth_date }}</td>
                    <td>{{ $data->union_name }}</td>
                    <td>
                        <form action="{{ route('user.active', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to active this user?');">
                            @csrf
                            <button type="submit" class="btn btn-success">Active</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Bootstrap Pagination -->
        <div class="mt-3">
            {{ $user->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
