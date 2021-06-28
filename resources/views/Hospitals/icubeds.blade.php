@extends('Hospitals.layout')

@section('content')
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
                            <li><a href="#">ICU Beds</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-12">
            <div class="animated fadeIn">
               

                    <div class="buttons">

                        <!-- Left Block -->
                       
                                <div class="card">
                                <div class="card-header">
                                    <strong>ICU Beds</strong>
                                    
                                </div>
                                <div class="card-body">
                                <table class="table table-striped">
                                    
                                    <tbody>
                                        <tr>
                                            
                                            <td> <button type="button" class="btn btn-success btn-lg" style="width:200px; height:50;">Available</button></td>
                                            <td> <button type="button" class="btn btn-success btn-lg" style="width:200px; height:50;">Available</button></td>
                                            <td><button type="button" class="btn btn-success btn-lg" style="width:200px; height:50;">Available</button></td>
                                            <td><button type="button" class="btn btn-danger btn-lg" style="width:200px; height:50;">N/A</button></td>
                                        </tr>
                                        <tr>
                                            
                                            <td> <button type="button" class="btn btn-success btn-lg" style="width:200px; height:50;">Available</button></td>
                                            <td> <button type="button" class="btn btn-success btn-lg" style="width:200px; height:50;">Available</button></td>
                                            <td> <button type="button" class="btn btn-success btn-lg" style="width:200px; height:50;">Available</button></td>
                                            <td><button type="button" class="btn btn-success btn-lg" style="width:200px; height:50;">Available</button></td>
                                        </tr>
                                        <tr>
                                            
                                            <td><button type="button" class="btn btn-danger btn-lg" style="width:200px; height:50;">N/A</button></td>
                                            <td> <button type="button" class="btn btn-success btn-lg" style="width:200px; height:50;">Available</button></td>
                                            <td> <button type="button" class="btn btn-success btn-lg" style="width:200px; height:50;">Available</button></td>
                                            <td><button type="button" class="btn btn-success btn-lg" style="width:200px; height:50;">Available</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                                </div><!-- /# card --> 
                                
                            </div> <!-- .buttons -->

                        
                    </div><!-- .animated -->
                </div><!-- .content -->


            </div><!-- /#right-panel -->

            <!-- Right Panel -->

            @endsection