@extends('admin.layouts.layout')


@section('content')
<div class="card-body">
    <div class="text-right my-4">
        <a class="btn btn-primary" href="{{route('diagnostic.create')}}">Add District</a>
    </div>
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>


                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Photo</th>
                    <th>View</th>
                    <th>Update</th>
                    <th>Delete</th>


                </tr>
            </thead>
            <tbody>
       @foreach ($hospital as $data)
       <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->type}}</td>
        <td>
            <img src="{{ asset('uploads/img/hospital/' . $data->photo) }}" alt="Uploaded Image" width="100" height="100">
        </td>

        <td><a class="btn btn-primary" href="{{route('diagnostic.show',$data->id)}}">View</a></td>
        <td><a class="btn btn-success" href="{{route('diagnostic.edit',$data->id)}}">Update</a></td>
        <td>
            <form action="{{ route('diagnostic.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this division?');">
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
            {{ $hospital->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
