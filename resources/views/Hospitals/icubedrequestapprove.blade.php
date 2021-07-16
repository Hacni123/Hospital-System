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
                            <li class="active">Confirm ICU Bed Request</li>
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
                                                        <strong>Confirm ICU Bed</strong> Requests
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
                                                        <form action="{{ route('approveicurequest.update') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        @csrf
                                                        <input type="hidden" name="icuid" value="{{$Info->id}}">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Patient ID</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="pat_name" name="pat_name"  class="form-control" value="{{$Info->patient_id}}" disabled></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Reason</label></div>
                                                                <div class="col-12 col-md-9"><input type="text" id="pat_address" name="pat_address"  class="form-control" value="{{$Info->reason}}" disabled></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" id="action" name="action" class=" form-control-label" value="{{$Info->action}}">Status</label></div>
                                                                <div class="card-body">

                                                                  <select name="action" data-placeholder="Choose a action" class="standardSelect" tabindex="1">
                                                                  <option value="pending">Pending </option>
                                                                  <option value="confirmed">Confirmed</option>
                                                                  <option value="not confirmed">Not Confirmed</option>
                                    
                                                                   </select>
                                                                   </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" id="icubed_id" name="icubed_id" class=" form-control-label" >ICU Bed No</label></div>
                                                                <div class="card-body">

                                                                <select name="icubed_id" data-placeholder="Choose a action" class="standardSelect" tabindex="1">
                                                                  @foreach($icubeds1 as $icubed)
                                                                   <option value="{{$icubed->id}}">{{$icubed->id}}</option>
                                                                 @endForeach
                                    
                                                                   </select>
                                                                   </div>
                                                            </div>
                                                           </div>
                                                            </div>
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


                           


@endsection