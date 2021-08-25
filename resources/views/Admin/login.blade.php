<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title> Medi Care - Admin</title>

    <!-- Icons font CSS-->
    <link href="assets/admin/registration/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/registration/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/admin/registration/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/registration/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/admin/registration/css/main.css" rel="stylesheet" media="all">
</head>


<!-- Registration Body -->

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">

           

                <div class="card-heading">
                    <h2 class="title"> Admin Login </h2>
                </div>
                <div class="card-body">
                <form action="{{ route('adminlogin.post') }}" method="post">
                @csrf

                    

                        <div class="form-row">
                            <div class="name">User Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="login_username">
                                    @if ($errors->has('login_username'))
                                    <span class="text-danger">{{ $errors->first('login_username') }}</span>
                                    @endif

                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="login_password">
                                    @if ($errors->has('login_password'))
                                    <span class="error">{{ $errors->first('login_password') }}</span>
                                    @endif 
                                </div>
                            </div>
                        </div>


                        
                        <div class="form-row p-t-20">
                            <!--<label class="label label--block">Are you an existing customer?</label>-->
                            <div class="p-t-15">
                               <p>
                                    Don't you have account?
                                    <a href="{{URL::to('/aregistration')}}">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets/admin/registration/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets/admin/registration/vendor/select2/select2.min.js"></script>
    <script src="assets/admin/registration/vendor/datepicker/moment.min.js"></script>
    <script src="assets/admin/registration/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets/admin/registration/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->