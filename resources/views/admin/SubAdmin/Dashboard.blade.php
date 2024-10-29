
@extends('admin.layouts.layout')


@section('content')
<div class="card-body">
    <div class="text-right my-4">
        <a class="btn btn-primary" href="{{route('Employee.add')}}">Add District</a>
    </div>
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>



                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Division</th>
                    <th>District</th>
                    <th>Sub District</th>
                    <th>Unions</th>

                    {{-- <th>Update</th> --}}
                    <th>Delete</th>


                </tr>
            </thead>
            <tbody>
       @foreach ($employee as $data)
       <tr>

        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->password_textPlain}}</td>
        <td>{{$data->division_name}}</td>
        <td>{{$data->district_name}}</td>
        <td>{{$data->subdistrict_name}}</td>
        <td>{{$data->union_name}}</td>


        {{-- <td><a class="btn btn-success" href="{{route('employee.edit',$data->id)}}">Update</a></td> --}}
        <td>
            <form action="{{ route('employee.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this division?');">
                @csrf

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
       @endforeach

            </tbody>

        </table>
         <!-- Bootstrap Pagination -->
         <div class="mt-3">
            {{ $employee->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
