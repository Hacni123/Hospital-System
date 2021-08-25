@extends('Admin.alayout');


@section('mainContent')

 <!-- DATA TABLE-->
 <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <br>
                           
                            
                            
                            <div class="col-lg-10" >
                                <h2 class="title-1 m-b-25"> Ambulances </h2>
                                <div class="table-responsive table--no-card m-b-40">
                                <form action="aicubeds" method="POST">
                                @csrf
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Status</th>
                                            <th>Hospital Id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <td>{{ $amb->id }}</td>
                                            <td>{{ $amb->status }}</td>
                                            <td>{{ $amb->hospital_id }}</td>
                                            </tr>
                                            
                                       
                                        </tbody>
                                       
                                   
                                    </table>
                                </div>
                            </div>
                      
                                   
                                   
                                
                           
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

           
                            
                            @endsection