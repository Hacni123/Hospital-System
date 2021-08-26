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
                                                
                                                <th>Name </th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                                <th>Patient Id</th>
                                                <th>Hospital Id</th>
                                            </tr>
                                        </thead>
                                        @foreach($patients as $pat)
                                        <tbody>
                                            <tr>
                                                
                                                <td>{{ $pat->pat_name }}</td>
                                                <td>{{ $pat->pat_email }}</td>
                                                <td>{{ $pat->pat_address }}</td>
                                                <td>{{ $pat->pat_mobile }}</td>
                                                <td>{{ $pat->pat_id }}</td>
                                                <td>{{ $pat->hospital_id }}</td>
                                               
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