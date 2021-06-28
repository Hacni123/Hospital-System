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
                            <li class="active">All Patient Details</li>
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
                                <strong class="card-title">All Patient Details</strong>
                            </div>
                            
                            <div class="card-body">
                            
                                <table class="table table-striped">
                                @if(sizeof($patients) > 0)
                                    <thead>
                                        <tr>
                                            <th scope="col">Patient ID</th>
                                            <th scope="col">Patient Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Contact No</th>
                                            <th scope="col">National ID</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($patients as $patient)
                                    <tbody>
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $patient->pat_name }}</td>
                                            <td>{{ $patient->pat_email }}</td>
                                            <td>{{ $patient->pat_address }}</td>
                                            <td>{{ $patient->pat_mobile }}</td>
                                            <td>{{ $patient->pat_id }}</td>
                                            <td>
                                            <form action="{{ route('delete.destroy',$patient->id) }}"  method="POST">
                                               <a class="btn btn-primary" href="edit/{{$patient->id}}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                               <button type="submit" class="btn btn-danger">Delete</button>
                                           </form>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                    @endforeach
                                </table>
                                {{-- Pagination --}}
                                <div class="d-flex justify-content-center">
                                  {{$patients->links("pagination::bootstrap-4")}}
                                </div>
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
    