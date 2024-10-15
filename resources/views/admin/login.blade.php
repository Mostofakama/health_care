<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* login */
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

        .text-danger {
            font-size: 14px;
        }
    </style>
</head>

<body>

    <!-- Form Section -->
    <section class="container-custom">
        <div class="login_section">
            <section id="formsection" class="row">
                <div class="col-sm-12 my-auto">
                    <form class="form-horizontal loginbox mt-2" method="post" action="{{ route('admin.login.store') }}">
                        @csrf
                        <h4>Admin Login</h4>

                        <!-- Email Field -->
                        <div class="mb-4 InputWithIcon">
                            <label for="exampleInputEmail1" class="form-label">Mobile</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Mobile No." id="exampleInputEmail1" value="{{ old('email') }}">
                            <!-- Display error for email -->
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mb-4">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter your Password" id="exampleInputPassword1" name="password">
                            <!-- Display error for password -->
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="submitbtn">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                        <!-- Signup Link -->
                        <div class="mb-3 mt-4">
                            <p>Not yet a member? <a href="#">Sign Up Now</a></p>
                        </div>

                        <!-- Forgot Password Link -->
                        <div class="forgotpassword">
                            <a class="btn btn-primary" href="#">Lost your password?</a>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/554419e89c.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
