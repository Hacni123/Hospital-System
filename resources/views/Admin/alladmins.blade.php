@extends('Admin.adminlayout');

@section('content')

  <!-- MAIN CONTENT-->
  <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                <form action="" method="POST">
                                @csrf
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Admin Id</th>
                                                <th>Name </th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                                
                                            </tr>
                                        </thead>
                                        @foreach($admins as $admin)
                                        <tbody>
                                            <tr>
                                                <td>{{ $admin->login_id }}</td>
                                                <td>{{ $admin->admin_name }}</td>
                                                <td>{{ $admin->admin_email }}</td>
                                                <td>{{ $admin->admin_address }}</td>
                                                <td>{{ $admin->admin_mobile }}</td>
                                               
                                               
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