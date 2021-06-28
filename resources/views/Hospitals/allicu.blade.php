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
                            <li class="active">All ICU Beds Details</li>
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
                                <strong class="card-title">All ICU Beds Details</strong>
                            </div>
                            
                            <div class="card-body">
                            
                                <table class="table table-striped">
                                @if(sizeof($icubeds) > 0)
                                    <thead>
                                        <tr>
                                            <th scope="col">Bed Id</th>
                                            <th scope="col">Ward No</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($icubeds as $bed)
                                    <tbody>
                                        <tr>
                                            <td>{{ $bed->id }}</td>
                                            <td>{{ $bed->ward_no }}</td>
                                            <td>{{ $bed->status }}</td>
                                            <td>
                                            <form action="{{ route('delete.destroyb',$bed->id) }}"  method="POST">
                                               <a class="btn btn-primary" href="editicub/{{$bed->id}}">Edit</a>
                                                @csrf
                                                @method('DELETE')
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
    