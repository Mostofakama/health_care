@extends('admin.layouts.layout')


@section('content')
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">Division</div>
    <div class="pl-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{route('division.index')}}"><i class='bx bx-home-alt'></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Layouts</li>
            </ol>
        </nav>
    </div>
    <div class="ml-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javaScript:;">Action</a>
                <a class="dropdown-item" href="javaScript:;">Another action</a>
                <a class="dropdown-item" href="javaScript:;">Something else here</a>
                <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javaScript:;">Separated link</a>
            </div>
        </div>
    </div>
</div>
<!--end breadcrumb-->
<div class="row">
    <div class="col-12 col-lg-7 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Update Division</h5>
            </div>

            <div class="card-body">
                <div class="form-body">


                        <form action="{{route('division.update', $division->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label>Division Name</label>
                                <input type="text" class="form-control" name="name" value="{{$division->name}}"/>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="form-group">
                                <label>Division Code</label>
                                <input type="text" class="form-control" name="code" value="{{$division->code}}"/>
                            @error('code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <button type="submit" class="btn btn-primary px-4">Update</button>
                        </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
