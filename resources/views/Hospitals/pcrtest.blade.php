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
                            <li><a href="#">Table</a></li>
                            <li class="active">All PCR Test Requests</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">New PCR Test Requests</strong>
                            </div>
                            
                            <div class="card-body">
                            
                                <table class="table table-striped">
                                @if(sizeof($data) > 0)
                                    <thead>
                                        <tr>
                                            <th scope="col">PCR ID</th>
                                            <th scope="col">Patient Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Contact No</th>
                                            <th scope="col">National ID</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $pcrr)
                                    <tbody>
                                        <tr>
                                            
                                            <td>{{ $pcrr->id }}</td>
                                            <td>{{ $pcrr->pat_name }}</td>
                                            <td>{{ $pcrr->pat_address }}</td>
                                            <td>{{ $pcrr->pat_mobile }}</td>
                                            <td>{{ $pcrr->pat_id }}</td>
                                            <td>
                                            <form action="{{ route('notapprovepcrrequest.update',$pcrr->id) }}"  method="POST">
                                               <a class="btn btn-primary" href="editpcrrequest/{{$pcrr->id}}">Approve</a>
                                                @csrf
                                                <input type="hidden" name="bid" value="{{$pcrr->id}}">
                                               <button type="submit" class="btn btn-danger">Delete</button>
                                           </form>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                    @endforeach
                                </table>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated --> 
        </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
    @else
        <div class="alert alert-alert">Start Adding to the Database.</div>
    @endif

    @endsection
    