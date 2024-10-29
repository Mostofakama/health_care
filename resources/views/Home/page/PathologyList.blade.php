@include('Home.Header')
 <section class="container-custom my-4" style="height:80vh;">
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>


                    <th>Name</th>
                    <th>Regular Price</th>
                    <th>Discount Percentage </th>
                    <th>Discount Price</th>



                </tr>
            </thead>
            <tbody>
       @foreach ($pathology as $data)
       <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->regular_price}}</td>
        <td>{{$data->discount_percentage}}</td>
        <td>{{$data->discount_price}}</td>




    </tr>
       @endforeach

            </tbody>

        </table>
         <!-- Bootstrap Pagination -->
         <div class="mt-3">
            {{ $pathology->links('pagination::bootstrap-4') }}
        </div>
    </div>
 </section>
@include('Home.Footer')
