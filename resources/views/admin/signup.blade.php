@extends('admin.layouts.layout')


@section('content')

    <!-- menu end -->
    <section class="container-custom ">
        <div class=" login_section">
            <section id="formsection" class="row">
                <div class="col-sm-12 my-auto">
                    <form class="form-horizontal loginbox mt-2" action="{{route('admin.signup.store')}}" method="post">
                       @csrf
                        <h4>Admin signup</h4>
                        <div class="mb-4 InputWithIcon">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control"  name="name"
                                placeholder="Name" >
                        </div>
                        <div class="mb-4 InputWithIcon">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email"
                                placeholder="Enter Email No." >
                        </div>

                        {{-- <div class="form-group">
                            <label>Division</label>

                                <select id="select-division" name="division_id" class="form-control w-100">
                                    <option value="">Select Division</option>
                                    @foreach ($division as $division)
                                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                                    @endforeach
                                </select>
                                @error('division_id')
                                <span class="text-danger">{{ $message }}</span>
                               @enderror


                        </div>
                        <div class="form-group ">
                            <label>District</label>
                            <select id="select-district" name="district_id" class="form-control w-100">
                                <option value="">Select District</option>

                            </select>
                            @error('district_id')
                            <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="form-group ">
                            <label>Sub District</label>
                            <select id="select-subdistrict" name="sub_district_id" class="form-control w-100">
                                <option value="">Select District</option>

                            </select>
                            @error('sub_district_id')
                            <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
                        <div class="form-group ">
                            <label>Unions</label>
                            <select id="select-unions" name="union_id" class="form-control w-100">
                                <option value="">Select Unions</option>

                            </select>
                            @error('union_id')
                            <span class="text-danger">{{ $message }}</span>
                           @enderror
                        </div>
 --}}

                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control"  placeholder=" Enter your Password"
                                 name="password">
                        </div>

                        <div class="mb-4 form-group">
                            <select  name="role" class="form-control w-100" aria-label="Default select example">
                                <option selected>select Admin</option>
                                <option value="1">Admin</option>
                                <option value="2">Sub-admin</option>
                                <option value="3">Employee</option>
                            </select>
                        </div>
                        <div class="submitbtn">
                            <button type="submit" class="btn btn-primary">Add New</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>
    @endsection
