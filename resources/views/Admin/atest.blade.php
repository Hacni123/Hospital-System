@extends('Admin.adminlayout');

@section('content')

 <!-- DATA TABLE-->
 <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <br>
                            
                            <div class="table-responsive table-responsive-data2">
                            
                                
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
                                    <strong>All Hospitals</strong>
                                    
                                </div>
                               
                                
                                <div class="card-body">
                                <table class="table table-striped">
                                <tbody>
                                   @foreach($hospitals->chunk(3) as $hospital)
                                <tr>
                                   @foreach( $hospital as $hos )
                                <td>
                                      
                                <th>    
                                            <form action="{{ route('positibepcr.show') }}"  method="POST">
                                               
                                                @csrf
                                                <input type="hidden" name="bid" value="{{$hos->id}}">
                                                <button type="submit" class="btn btn-success btn-lg" style="width:200px; height:50;">{{$hos->hos_name}}</button>
                                           </form>
                                </td>
                                  @endforeach
                                  </tr>
                                  @endforeach
                                    
                                </table>
                            </div>
                            
                                </div><!-- /# card --> 
                                
                            </div> <!-- .buttons -->

                        
                    </div><!-- .animated -->
                </div><!-- .content -->


            </div><!-- /#right-panel -->

           

            
                    
                    
                </section>
            </div>


        

        </div> <!-- .content -->
    </div><!-- /#right-panel -->
            @endsection
