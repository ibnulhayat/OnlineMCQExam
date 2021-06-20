<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="{{asset('assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container ">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">

                            <h2>Sign Up</h2>
                        </div>
                        <div class="login-form">
                            <form action="{{route('store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="form-control" type="email" name="useremail" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text" maxlength="11" name="phone-number" placeholder="Phone Number" required>
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label>User Type</label>
                                    <select class="form-control" name="user_type" required >
                                        <option value="">Select One</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                </div>
                                <div>
                                    @if(Session::has('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('success') }}
                                    </div>
                                    @endif
                                </div>
                                
                                <div class="d-flex justify-content-center"> 
                                    <a   href="{{route('login')}}"  class="au-btn au-btn--blue  m-b-20 m-r-20" type="button">Log in</a>

                                    <button class="au-btn  au-btn--green m-b-20" type="submit">Submit</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
