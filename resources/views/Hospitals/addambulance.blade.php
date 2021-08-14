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
                            <li class="active">Add New Ambulance</li>
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
                                                        <strong>Add New</strong> Ambulance
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
                                                        <form action="{{ route('addambulance.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        @csrf
            
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" id="status" name="status" class=" form-control-label">Status</label></div>
                                                                <div class="card-body">

                                                                  <select name="status" data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                                                  <option value=""></option>
                                                                  <option value="Availabe">Availabe</option>
                                                                  <option value="Not Availabe">Not Availabe</option>
                                    
                                                                   </select>
                                                                   </div>
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