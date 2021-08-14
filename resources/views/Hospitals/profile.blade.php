@extends('Hospitals.layout')

@section('content')

    <div id="right-panel" class="right-panel">

        

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


               

                    <div class="col-lg-12">
                        

                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Profile</strong> Details
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
                                                        <form action="{{ route('addnewpatient.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        @csrf
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hospital Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="hos_name"  class="form-control" value="{{$Info1->hos_name}}"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hospital Address</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="address-input" name="hos_address"  class="form-control" value="{{$Info1->hos_address}}"></div>
                                                            </div>
                                                         <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hospital Email</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="id-input" name="hos_email"  class="form-control" value="{{$Info1->hos_email}}"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Hospital Contact No</label></div>
                                                                <div class="col-12 col-md-9"><input type="number" id="mobile-input" name="hos_mobile"  class="form-control" value="{{$Info1->hos_mobile}}"></div>
                                                            </div>  
                                                            
                                                    </div>
                                                    
                                                </div>
                                            </form>

                                            <div class="col-lg-6">         
                                               
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->

@endsection