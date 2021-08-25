
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="assets/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge10">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h1>Admin Registration</h1>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('register.postadmin') }}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input class="au-input au-input--full" type="text" name="admin_name" placeholder="Enter your name">
                                    @if ($errors->has('admin_name'))
                                    <span class="error">{{ $errors->first('admin_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input class="au-input au-input--full" type="text" name="admin_mobile" placeholder="Enter your mobile number">
                                    @if ($errors->has('admin_mobile'))
                                    <span class="error">{{ $errors->first('admin_mobile') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="admin_email" placeholder="Enter your email">

                                    @if ($errors->has('admin_email'))
                                    <span class="error">{{ $errors->first('admin_email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="au-input au-input--full" type="text" name="admin_address" placeholder="Enter your address">

                                    @if ($errors->has('admin_address'))
                                    <span class="error">{{ $errors->first('admin_address') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input class="au-input au-input--full" type="text" name="login_username" placeholder="Enter User name">

                                    @if ($errors->has('login_username'))
                                    <span class="error">{{ $errors->first('login_username') }}</span>
                                    @endif
                                </div>

                               <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="login_password" placeholder="Enter Password">

                                   @if ($errors->has('login_password'))
                                   <span class="error">{{ $errors->first('login_password') }}</span>
                                   @endif 
                                   </div>
                            

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="{{URL::to('/alogin')}}">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="assets/admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets/admin/vendor/slick/slick.min.js">
    </script>
    <script src="assets/admin/vendor/wow/wow.min.js"></script>
    <script src="assets/admin/vendor/animsition/animsition.min.js"></script>
    <script src="assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="assets/admin/js/main.js"></script>

</body>

</html>
<!-- end document-->