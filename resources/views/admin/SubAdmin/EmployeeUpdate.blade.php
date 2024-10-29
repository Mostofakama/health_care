
@extends('admin.layouts.layout')


@section('content')
<style>

    /* login  */

    </style>
       <section class="container-custom ">
        <div class=" login_section">
            <section id="formsection" class="row">
                <div class="col-sm-12 my-auto">
                    <form class="form-horizontal loginbox mt-2" action="{{route('Employee.store')}}" method="post">
                       @csrf
                       @method('PATCH')
                        <h4>Employee Update</h4>
                        <div class="mb-4 InputWithIcon">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control"  name="name"
                                placeholder="Name" value="{{$employee->name}}" >
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                               @enderror
                        </div>
                        <div class="mb-4 InputWithIcon">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email"
                                placeholder="Enter Email No."  value="{{$employee->email}}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                               @enderror
                        </div>
                        {{-- <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control"  placeholder=" Enter your Password"
                                 name="password">
                                 @error('password')
                                <span class="text-danger">{{ $message }}</span>
                               @enderror
                        </div> --}}
                        <div class="submitbtn">
                            <button type="submit" class="btn btn-primary">Add New</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>



@endsection
