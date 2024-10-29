@extends('admin.layouts.layout')


@section('content')
<div class="card-body">
    <div class="text-right my-4">
        <a class="btn btn-primary" href="{{route('doctor.create')}}">Add District</a>
    </div>
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Qualification</th>
                    <th>Expert</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Photo</th>
                    <th>View</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
       @foreach ($doctor as $data)
       <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->designation}}</td>
        <td>{{$data->qualifications}}</td>
        <td>{{$data->expert_in}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->contact_number}}</td>
        <td>
            <img src="{{ asset('uploads/img/doctors/' . $data->photo) }}" alt="Uploaded Image" width="100" height="100">
        </td>

        <td><a class="btn btn-primary" href="{{route('doctor.show',$data->id)}}">View</a></td>
        <td><a class="btn btn-success" href="{{route('doctor.edit',$data->id)}}">Update</a></td>
        <td>
            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete this division?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
       @endforeach

            </tbody>

        </table>
         <!-- Bootstrap Pagination -->
         <div class="mt-3">
            {{ $doctor->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
