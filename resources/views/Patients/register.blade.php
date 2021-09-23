
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

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
<div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                <span class="center"><span class="icon"><img src="assets/images/icon-logo.png" alt="#" /></span></span>
                                        <hr>
                            </div>
                            <form action="{{ route('register.post') }}" method="post">
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
                                    <input type="pat_name" name="pat_name" class="form-control form-control-user" id="pat_name"
                                        placeholder="Name" value="{{ old ('pat_name')}}">
                                        <span class="text-danger">@error('pat_name') {{ $message }} @enderror</span>

                                </div>
                                
                                <div class="form-group">
                                    <input type="pat_email" name="pat_email" class="form-control form-control-user" id="pat_email"
                                        placeholder="Email Address" value="{{ old ('pat_email')}}">
                                        @if($errors->has('pat_email')) <p>{{$errors->first('pat_email')}}</p>@endif
                                </div>
                                <div class="form-group">
                                    <input type="pat_address" name="pat_address" class="form-control form-control-user" id="pat_address"
                                        placeholder="Address" value="{{ old ('pat_address')}}">
                                        @if($errors->has('pat_address')) <p>{{$errors->first('pat_address')}}</p>@endif
                                </div>
                                <div class="form-group">
                                    <input type="pat_id" name="pat_id" class="form-control form-control-user" id="pat_id"
                                        placeholder="NIC Number" value="{{ old ('pat_id')}}">
                                        @if($errors->has('pat_id')) <p>{{$errors->first('pat_id')}}</p>@endif
                                </div>
                                <div class="form-group">
                                    <input type="pat_mobile" name="pat_mobile" class="form-control form-control-user" id="pat_mobile"
                                        placeholder="Mobile Number" value="{{ old ('pat_mobile')}}">
                                        @if($errors->has('pat_mobile')) <p>{{$errors->first('pat_mobile')}}</p>@endif
                                </div>
                                <div class="form-group">
                                    <input type="login_username" name="login_username" class="form-control form-control-user" id="login_username"
                                        placeholder="Username" value="{{ old ('login_username')}}">
                                        @if($errors->has('login_username')) <p>{{$errors->first('login_username')}}</p>@endif

                                </div>
                                <div class="form-group">
                                    
                                        <input type="password" name="login_password" class="form-control form-control-user"
                                            id="login_password" placeholder="Password">
                                            <span class="text-danger">@error('login_password') {{ $message }} @enderror</span>
                           
                                </div>
                                <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" id="hospital_id" name="hospital_id" class=" form-control-label" >Hospital</label></div>
                                                                <div class="card-body">

                                                                <select name="hospital_id" data-placeholder="Choose a Hospital..." class="standardSelect" tabindex="1">
                                                                  @foreach($hospitalsicu as $hospital)
                                                                  <option value="{{$hospital->id}}">{{$hospital->hos_name}}</option>
                                                                 @endforeach
                                    
                                                                   </select>
                                                                   </div>
                                                            </div>
                                <input type="submit" name="Register account" class="btn btn-primary btn-user btn-block" placeholder="Register Account"></input>
                                    
                                
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{URL::to('/login')}}">Already have an account? Login!</a>
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