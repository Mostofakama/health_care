<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>

    </title>

<style>

/* login  */
.login_section {
	background-color: #082744;
	margin-top: 80px;
	padding: 10px 0 50px;
}
#formsection {
	height: 500px;
	width: 400px;
	margin: auto;
	margin-top: 50px;
	background-color: #fff;
	border-radius: 5px;
}
.my-auto {
	margin-top: auto !important;
	margin-bottom: auto !important;
}
#formsection form {
	padding: 30px;
	color: #000;
}
#formsection h4 {
	padding-bottom: 5px;
	text-align: center;
	font-size: 30px;
	font-weight: 900;
}
.form-label {
	margin-bottom: .5rem;
}
</style>
</head>

<body>
    <!-- menu  -->


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
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control"  placeholder=" Enter your Password"
                                 name="password">
                        </div>

                        <div class="mb-4">
                            <select name="role" class="form-select" aria-label="Default select example">
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




    <body>







        <script src="https://kit.fontawesome.com/554419e89c.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}
        {{-- <script src="js/app.js"></script> --}}



    </body>

</html>
