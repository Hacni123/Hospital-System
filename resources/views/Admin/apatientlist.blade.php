@extends('Admin.alayout');


@section('mainContent')
  <!-- MAIN CONTENT-->
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                <form action="apatientlist" method="POST">
                                @csrf
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name </th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Patient Id</th>
                                                <th>Mobile Number</th>
                                                <th>Login Id</th>
                                            </tr>
                                        </thead>
                                        @foreach($showpatients as $showp)
                                        <tbody>
                                            <tr>
                                                <td>{{ $showp->id }}</td>
                                                <td>{{ $showp->pat_name }}</td>
                                                <td>{{ $showp->pat_email }}</td>
                                                <td>{{ $showp->pat_address }}</td>
                                                <td>{{ $showp->pat_id }}</td>
                                                <td>{{ $showp->pat_mobile }}</td>
                                                <td>{{ $showp->login_id }}</td>
                                               
                                            </tr>
                                         
                                        </tbody>
                                        @endforeach
                                    </table>
                                    </form>
                                </div>
                            </div>
                           
                </div>
            </div>
        </div>

    </div>
@endsection