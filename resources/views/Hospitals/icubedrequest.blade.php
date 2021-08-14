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
                                <strong class="card-title">New ICU Requests</strong>
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
                                    @foreach ($data as $icubedr)
                                    <tbody>
                                        <tr>
                                            
                                            <td>{{ $icubedr->id }}</td>
                                            <td>{{ $icubedr->pat_name }}</td>
                                            <td>{{ $icubedr->reason }}</td>
                                            <td>{{ $icubedr->pat_address }}</td>
                                            <td>{{ $icubedr->pat_mobile }}</td>
                                            <td>{{ $icubedr->pat_id }}</td>
                                            <td>
                                            <form action="{{ route('notapproveicurequest.update') }}"  method="POST">
                                               <a class="btn btn-primary" href="editicubrequest/{{$icubedr->id}}">Approve</a>
                                                @csrf
                                                <input type="hidden" name="bid" value="{{$icubedr->id}}">
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
        <div class="alert alert-alert">New Icu Bed Requests are not available.</div>
    @endif

    @endsection
    