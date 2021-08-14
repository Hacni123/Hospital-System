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
                            <li class="active">Update PCR Result Details</li>
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
                                                        <strong>Update PCR Result</strong> Details
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
                                                        <form action="{{ route('approvepcrresult.update') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                        @csrf
                                                        <input type="hidden" name="bid" value="{{$Info->id}}">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" id="result" name="result" class=" form-control-label" value="{{$Info->result}}">Result</label></div>
                                                                <div class="card-body">

                                                                  <select name="result" data-placeholder="Choose a Option" class="standardSelect" tabindex="1">
                                                                  <option value="Positive">Positive</option>
                                                                  <option value="Negative">Negative</option>
                                    
                                                                   </select>
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