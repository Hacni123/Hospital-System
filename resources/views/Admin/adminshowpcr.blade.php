@extends('Admin.adminlayout');

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
                            <li class="active">All Positive PCR Details</li>
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
                                <strong class="card-title">All Positive PCR Details</strong>
                            </div>
                            
                            <div class="card-body">
                            
                                <table class="table table-striped">
                                @if(sizeof($pcr) > 0)
                                    <thead>
                                        <tr>
                                            <th scope="col">PCR Id</th>
                                            <th scope="col">Patient Name</th>
                                            <th scope="col">Patient Address</th>
                                            <th scope="col">Patient Mobile</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Result</th>
                                        </tr>
                                    </thead>
                                    @foreach ($pcr as $pc)
                                    <tbody>
                                        <tr>
                                            <td>{{ $pc->id }}</td>
                                            <td>{{ $pc->pat_name }}</td>
                                            <td>{{ $pc->pat_address }}</td>
                                            <td>{{ $pc->pat_mobile }}</td>
                                            <td>{{ $pc->date }}</td>
                                            <td>{{ $pc->result }}</td>
                                            
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
    