@extends('admin.layouts.layout')


@section('content')
<div class="card-body">
    <div class="text-right my-4">
        <a class="btn btn-primary" href="{{route('pathology.create')}}">Add District</a>
    </div>
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>


                    <th>Id</th>
                    <th>Name</th>
                    <th>Regular Price</th>
                    <th>Discount Percentage </th>
                    <th>Discount Price</th>
                    <th>Update</th>
                    <th>Delete</th>


                </tr>
            </thead>
            <tbody>
       @foreach ($pathologie as $data)
       <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->regular_price}}</td>
        <td>{{$data->discount_percentage}}</td>
        <td>{{$data->discount_price}}</td>



        <td><a class="btn btn-success" href="{{route('pathology.edit',$data->id)}}">Update</a></td>
        <td>
            <form action="{{ route('pathology.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this division?');">
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
            {{ $pathologie->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
