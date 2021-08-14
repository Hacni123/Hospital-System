<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Hospital System</a>
                <a class="navbar-brand hidden" href="./"><img src="assetshos/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{url('dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Patient Details</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>New Patient</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="{{url('addnewpatient')}}">Add new Patient</a></li>  
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>All Patient Details</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{url('allpatients')}}">View</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">ICU Beds</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Available ICU Beds</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{url('icubeds')}}">ICU Beds</a></li>
        
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('icurequest')}}"> <i class="menu-icon ti-email"></i>New ICU Beds requests </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>All ICU Bed Requests</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="{{url('viewapprovedicurequest')}}">Approved Requests</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="{{url('notviewapprovedicurequest')}}">Not Approved Requests</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>All Details</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="{{url('addicubed')}}">Add New ICU Bed</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="{{url('allicubed')}}">All ICU Beds</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">Ambulances</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Available Ambulances</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{url('ambulance')}}">Ambulances</a></li>
        
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('ambrequest')}}"> <i class="menu-icon ti-email"></i>New Ambulances requests </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>All Ambulances Requests</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-line-chart"></i><a href="{{url('viewapprovedambrequest')}}">Approved Requests</a></li>
                            <li><i class="menu-icon fa fa-area-chart"></i><a href="{{url('notviewapprovedambrequest')}}">Not Approved Requests</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>All Details</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-map-o"></i><a href="{{url('addambulance')}}">Add New Ambulance</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="{{url('allambulance')}}">All Ambulances</a></li>
                        </ul>
                    </li>

                    <h3 class="menu-title">PCR Tests</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>PCR Requests</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{url('pcrrequest')}}">New PCR Requests</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{url('viewapprovedpcrrequest')}}">Confirmed PCR Requests By Patient</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{url('viewpendingpcrrequest')}}">Pending PCR Requests</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{url('viewrejectedpcrrequest')}}">Rejected PCR Requests</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{url('allpcrrequest')}}">All PCR Requests</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>PCR Reports</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{url('pcrresult')}}">PCR Reports</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{url('viewpositiveresult')}}">Positive Reports</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="{{url('viewnegativeresult')}}">Negative Reports</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Profile</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Profile Details</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{url('hprofile')}}">Profile Details</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{url('editpassword')}}">Change Password</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>