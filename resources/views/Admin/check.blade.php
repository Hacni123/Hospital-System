@extends('Hospitals.layout')

@section('content')
<!--
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
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>


            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1" height="50">
                    <div class="card-body pb-0" >
                        
                        <h4 class="mb-0">
                            <span class="count"></span>
                        </h4>
                        
                        <p class="text-light">New ICU Bed Requests</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
            </div>
           

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            
                           
                        </div>
                        <h4 class="mb-0">
                            <span class="count"></span>
                        </h4>
                        <p class="text-light">New PCR Requests</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
            </div>
       

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                           
                            
                        </div>
                        <h4 class="mb-0">
                            <span class="count"></span>
                        </h4>
                        <p class="text-light">New Ambulances Requests</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
           

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            
                        </div>
                        <h4 class="mb-0">
                            <span class="count"></span>
                        </h4>
                        <p class="text-light">All Patients</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
            

            <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            
                        </div>
                        <h4 class="mb-0">
                            <span class="count"></span>
                        </h4>
                        <p class="text-light">No of Positive Reports</p>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>

                    </div>
                </div>
            </div>
           

            <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                           
                            
                        </div>
                        <h4 class="mb-0">
                            <span class="count"></span>
                        </h4>
                        <p class="text-light">No of Negative Reports</p>

                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
                
            </div>



            <div class="col-lg-3 col-md-6">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            
                           
                        </div>
                        <h4 class="mb-0">
                            <span class="count"></span>
                        </h4>
                        <p class="text-light">Available ICU Beds</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart2"></canvas>
                        </div>

                    </div>
                </div>
               
            </div>
            


            <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-flat-color-1" height="50">
                    <div class="card-body pb-0" >
                        
                        <h4 class="mb-0">
                            <span class="count"></span>
                        </h4>
                        
                        <p class="text-light">Available Ambulances</p>

                        <div class="chart-wrapper px-0" style="height:70px;" height="70">
                            <canvas id="widgetChart1"></canvas>
                        </div>

                    </div>

                </div>
             
            </div>
-->

            <div class="col-xl-12">
                <div class="content mt-12">
            <div class="animated fadeIn">
               

                    <div class="buttons">

                        <!-- Left Block -->
                       
                                <div class="card">
                                <div class="card-header">
                                    <strong>ICU Beds</strong>
                                    
                                </div>
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="card-body">
                                <table class="table table-striped">
                                <tbody>
                                  
                                <tr>
                                   
                                <td>
                            
                                            <th> <button type="submit" class="btn btn-success btn-lg" style="width:200px; height:50;"></button></th>
                                            
                                          
                                            <th><button type="button" class="btn btn-danger btn-lg" style="width:200px; height:50;"></button></th>
                                          
                                </td>
                                 
                                  </tr>
                                
                                    
                                </table>
                            </div>
                            </form>
                                </div><!-- /# card --> 
                                
                            </div> <!-- .buttons -->

                        
                    </div><!-- .animated -->
                </div><!-- .content -->


            </div><!-- /#right-panel -->

            <div class="col-xl-12">
                <div class="content mt-12">
            <div class="animated fadeIn">
               

                    <div class="buttons">

                        <!-- Left Block -->
                       
                        <div class="card">
                                <div class="card-header">
                                    <strong>Ambulances</strong>
                                    
                                </div>
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="card-body">
                                <table class="table table-striped">
                                <tbody>
                               
                                <tr>
                                
                                <td>
                                
                                            <th> <button type="submit" class="btn btn-success btn-lg" style="width:200px; height:50;"></button></th>
                                            
                                           
                                            <th><button type="button" class="btn btn-danger btn-lg" style="width:200px; height:50;"></button></th>
                                           
                                </td>
                              
                                  </tr>
                                  
                                    
                                </table>
                            </div>
                            </form>
                                </div><!-- /# card --> 
                                
                            </div> <!-- .buttons -->

                        
                    </div><!-- .animated -->
                </div><!-- .content -->


            </div><!-- /#right-panel -->
                    </div>
                   
                </div>
            </div>

            
                    
                    
                </section>
            </div>


        


           

            

            


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    @endsection