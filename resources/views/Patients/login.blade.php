<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('/customAuth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('/customAuth/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        <span class="center"><span class="icon"><img src="assets/images/icon-logo.png" alt="#" /></span></span>
                                        <hr>
                                    </div>
                                    <form action="{{ route('login.post') }}" method="post">
                                        @csrf
                                        <div calss="results">
                                            @if(Session::get('fail'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('fail') }}

                                            </div>
                                            @endif


                                        </div>
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="form-group">
                                            <input type="login_username" name="login_username" class="form-control form-control-user" id="exampleInputlogin_username" 
                                                placeholder="Username" value="{{ old ('login_username')}}">
                                                <span class="text-danger">@error('login_username') {{ $message }} @enderror</span>
                                                
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="login_password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                                <span class="text-danger">@error('login_password') {{ $message }} @enderror</span>
                                                
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        
                                        <input type="submit" name="Login"  class="btn btn-primary btn-user btn-block" placeholder="Register Account"></input>
                                        
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{url('/register')}}">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>