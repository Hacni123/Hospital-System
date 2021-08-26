@extends('Admin.alayout');


@section('mainContent')

 <!-- DATA TABLE-->
 <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <br>
                            <h3 class="title-5 m-b-35" style="text-align:center"> Ambulances </h3>
                            <!--<div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add item</button>
                                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                        <select class="js-select2" name="type">
                                            <option selected="selected">Export</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="table-responsive table-responsive-data2">
                            <form action="aicubeds" method="POST">
                                @csrf
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>No</th>
                                            <th>Status</th>
                                            <th>Hospital Id</th>
                                        </tr>
                                    </thead>
                                    @foreach($ambulances as $amb)
                                    <tbody>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>{{ $amb->id }}</td>
                                            <td>{{ $amb->status }}</td>
                                            <td>{{ $amb->hospital_id }}</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr> 
                                       
                                    </tbody>
                                    @endforeach
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->


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
            @endsection
