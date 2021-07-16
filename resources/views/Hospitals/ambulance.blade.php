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
                            <li><a href="#">Ambulances</a></li>
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
                                    <strong>Ambulances</strong>
                                    
                                </div>
                                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="card-body">
                                <table class="table table-striped">
                                <tbody>
                                   @foreach($ambulances->chunk(3) as $ambulance)
                                <tr>
                                   @foreach( $ambulance as $amb )
                                <td>
                                @if($amb->status=="Availabe")
                                            <th> <button type="submit" class="btn btn-success btn-lg" style="width:200px; height:50;">Ambulance No: {{$amb->id}}</button></th>
                                            
                                            @else
                                            <th><button type="button" class="btn btn-danger btn-lg" style="width:200px; height:50;">Ambulance No: {{$amb->id}}</button></th>
                                            @endif
                                </td>
                                  @endforeach
                                  </tr>
                                  @endforeach
                                    
                                </table>
                            </div>
                            </form>
                                </div><!-- /# card --> 
                                
                            </div> <!-- .buttons -->

                        
                    </div><!-- .animated -->
                </div><!-- .content -->


            </div><!-- /#right-panel -->

            <!-- Right Panel -->

            @endsection