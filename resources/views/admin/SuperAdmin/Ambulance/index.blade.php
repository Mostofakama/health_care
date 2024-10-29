@extends('admin.layouts.layout')


@section('content')
<div class="card-body">
    <div class="text-right my-4">
        <a class="btn btn-primary" href="{{route('ambulance.create')}}">Add District</a>
    </div>
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>


                    <th>Name</th>
                    <th>Address</th>

                    <th>Update</th>
                    <th>Delete</th>


                </tr>
            </thead>
            <tbody>
       @foreach ($ambulance as $data)
       <tr>

        <td>{{$data->name}}</td>
        <td>{{$data->address}}</td>




        <td><a class="btn btn-success" href="{{route('ambulance.edit',$data->id)}}">Update</a></td>
        <td>
            <form action="{{ route('ambulance.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this division?');">
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
            {{ $ambulance->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
