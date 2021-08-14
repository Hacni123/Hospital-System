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
                            <li class="active">All ICU Bed Requests</li>
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
                                <strong class="card-title"> ICU Requests</strong>
                            </div>
                            
                            <div class="card-body">
                            
                                <table class="table table-striped">
                                @if(sizeof($data) > 0)
                                    <thead>
                                        <tr>
                                            <th scope="col">Request ID</th>
                                            <th scope="col">Patient Name</th>
                                            <th scope="col">Reason</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Contact No</th>
                                            <th scope="col">National ID</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($data as $patient)
                                    <tbody>
                                        <tr>
                                            
                                            <td>{{ $patient->id }}</td>
                                            <td>{{ $patient->pat_name }}</td>
                                            <td>{{ $patient->reason }}</td>
                                            <td>{{ $patient->pat_address }}</td>
                                            <td>{{ $patient->pat_mobile }}</td>
                                            <td>{{ $patient->pat_id }}</td>
                                            <td>{{ $patient->action }}</td>
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
    