@extends('Admin.alayout');


@section('mainContent')
  <!-- MAIN CONTENT-->
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                <form action="ahospitals" method="POST">
                                @csrf
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name </th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                                <th>Login Id</th>
                                            </tr>
                                        </thead>
                                        @foreach($hospitals as $hos)
                                        <tbody>
                                            <tr>
                                                <td>{{ $hos->id }}</td>
                                                <td>{{ $hos->hos_name }}</td>
                                                <td>{{ $hos->hos_email }}</td>
                                                <td>{{ $hos->hos_address }}</td>
                                                <td>{{ $hos->hos_mobile }}</td>
                                                <td>{{ $hos->login_id }}</td>
                                               
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