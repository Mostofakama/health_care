@extends('admin.layouts.layout')


@section('content')
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">pathology</div>
    <div class="pl-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="{{route('pathology.index')}}"><i class='bx bx-home-alt'></i></a>
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
                <h5 class="mb-0">Pathology Add</h5>
            </div>
            <div class="card-body">
                <div class="form-body">
                    <form action="{{route('pathology.store')}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label>Pathology Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name"/>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Regular Price</label>
                            <input value="{{old('regular_price')}}" type="number" class="form-control" name="regular_price" placeholder="Regular Price"/>
                            @error('regular_price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="discount_percentage">Discount Percentage:</label>
                            <input type="text" id="discount_percentage" name="discount_percentage" class="form-control" value="{{ old('discount_percentage') }}">
                            @error('discount_percentage')
                                 <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Hospital</label>
                            <select name="hospital_id" class="form-control">
                                <option value="">Select Hospital</option>
                                @foreach ($hospital as $hospital)
                                    <option value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                                @endforeach
                            </select>
                            @error('hospital_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary px-4">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
