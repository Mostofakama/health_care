@extends('admin.layouts.layout')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          @foreach ($unions as $union)
            <li class="nav-item">
              <a class="nav-link {{ $union->id == $union_id ? 'active' : '' }}" href="{{ route('employee.unions', $union->id) }}">
                {{ $union->name }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </nav>

<div class="card-body">

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Card Number</th>
                    <th>Mobile</th>
                    <th>Birth Date</th>
                    <th>Union</th>
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
            @if ($data->active == 0)
            <td>
                <form action="{{ route('user.active', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to Unactive this user?');">
                    @csrf
                    <button type="submit" class="btn btn-success">Active</button>
                </form>
            </td>
            @else
            <td>
                <form action="{{ route('user.unactive', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to Unactive this user?');">
                    @csrf
                    <button type="submit" class="btn btn-danger">UnActive</button>
                </form>
            </td>
            @endif

        </tr>
       @endforeach
            </tbody>
        </table>
        <!-- Bootstrap Pagination -->
        <div class="mt-3">
            {{ $user->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
