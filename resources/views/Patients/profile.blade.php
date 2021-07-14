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
                            
                        <div class="content mt-3">
            <div class="animated fadeIn">


               

                    <div class="col-lg-12">
                        

                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Update Patient</strong> Details
                                                    </div>
                                                    @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                    <strong>Error!</strong> 
                                                    <ul>
                                                     @foreach ($errors->all() as $error)
                                                   <li></li>
                                                    @endforeach
                                                   </ul>
                                                      </div>
                                                   @endif
                                                   
                                                    <div class="card-body card-block">
                                                        <form action="{{ route('profile') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        @csrf
                                                        <input type="hidden" name="pid" value="{{$Info->id}}">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Patient Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="pat_name" name="pat_name"  class="form-control" value="{{$Info->pat_name}}"><small class="help-block form-text">Enter Patient Name</small></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Patient Address</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="pat_address" name="pat_address"  class="form-control" value="{{$Info->pat_address}}"><small class="help-block form-text" >Enter Patient Address</small></div>
                                                            </div>
                                                         <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Patient National Id</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="pat_id" name="pat_id"  class="form-control" value="{{$Info->pat_id}}"><small class="help-block form-text" >Enter Patient National Id</small></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Patient Contact No</label></div>
                                                                <div class="col-12 col-md-9"><input type="number" id="pat_mobile" name="pat_mobile"  class="form-control" value="{{$Info->pat_mobile}}"><small class="help-block form-text">Enter Patient Contact No</small></div>
                                                            </div>  
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Patient Email</label></div>
                                                                <div class="col-12 col-md-9"><input type="email" id="pat_email" name="pat_email"  class="form-control" value="{{$Info->pat_email}}"><small class="help-block form-text" >Enter Patient Email</small></div>
                                                            </div>

                                                       
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Update
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="col-lg-6">         
                                               
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->
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