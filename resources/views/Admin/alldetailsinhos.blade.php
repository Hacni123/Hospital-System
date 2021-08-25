@extends('Admin.alayout');


@section('mainContent')

<div class="main-content">

<div class="animated fadeIn">
                           <div class="buttons">
                           <div class="card">

                           <div class="card-header">
                               <strong>ICU Beds</strong>    
                           </div>

                           <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                           @csrf
                           <div class="card-body">
                           <table class="table table-striped">
                           <tbody>
                              @foreach($icubeds->chunk(3) as $icu_beds)
                           <tr>
                              @foreach( $icu_beds as $bed )
                           <td>
                           @if($bed->status=="Availabe")
                                       <th> <button type="submit" class="btn btn-success btn-lg" style="width:200px; height:50;">Ward: {{$bed->ward_no}}, Bed No: {{$bed->id}}</button></th>
                                       
                                       @else
                                       <th><button type="button" class="btn btn-danger btn-lg" style="width:200px; height:50;">Ward: {{$bed->ward_no}}, Bed No: {{$bed->id}}</button></th>
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
                           </div><!-- /#right-panel -->

      
                   <div class="animated fadeIn">
                   <div class="buttons">
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
                       </div><!-- /#right-panel -->

        
<div>

@endsection