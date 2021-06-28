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
                            <li class="active">Add New Patient</li>
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
                                                        <strong>Add New</strong> Patient
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
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Patient Name</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="pat_name"  class="form-control"><small class="help-block form-text">Enter Patient Name</small></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Patient Address</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="address-input" name="pat_address"  class="form-control"><small class="help-block form-text">Enter Patient Address</small></div>
                                                            </div>
                                                         <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Patient National Id</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="id-input" name="pat_id"  class="form-control"><small class="help-block form-text">Enter Patient National Id</small></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Patient Contact No</label></div>
                                                                <div class="col-12 col-md-9"><input type="number" id="mobile-input" name="pat_mobile"  class="form-control"><small class="help-block form-text">Enter Patient Contact No</small></div>
                                                            </div>  
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">Patient Email</label></div>
                                                                <div class="col-12 col-md-9"><input type="email" id="email-input" name="pat_email"  class="form-control"><small class="help-block form-text">Enter Patient Email</small></div>
                                                            </div>

                                                       
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Save
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="col-lg-6">         
                                               
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->

@endsection