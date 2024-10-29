
@extends('admin.layouts.layout')


@section('content')
<div class="card-body">

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>



                    <th>Name</th>
                    <th>Card Number</th>
                    <th>Mobile</th>
                    <th>Birth Date</th>
                    <th>Unions</th>
                    <th>UnActive</th>




                </tr>
            </thead>
            <tbody>
       @foreach ($user as $data)
       <tr>

        <td>{{$data->visitor_name}}</td>
        <td>{{$data->card_number}}</td>
        <td>{{$data->mobile}}</td>
        <td>{{$data->birth_date}}</td>
        <td>{{$data->union_name}}</td>
        <td>
            <form action="{{route('user.unactive',$data->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to active this user?');">
                @csrf

                <button type="submit" class="btn btn-danger">UnActive</button>
            </form>
        </td>


        {{-- <td><a class="btn btn-success" href="{{route('employee.edit',$data->id)}}">Update</a></td> --}}

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
