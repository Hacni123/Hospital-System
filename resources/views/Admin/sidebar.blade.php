<aside class="menu-sidebar d-none d-lg-block" style="color:white">
           
            <!--
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            -->

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Admin System</a>
                <a class="navbar-brand hidden" href="./"><img src="assetshos/images/logo2.png" alt="Logo"></a>
            </div>
            
            <div class="menu-sidebar__content js-scrollbar1" style="color:white">
                <nav class="navbar-sidebar" style="color:white">
                   <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{url('/aindex')}}">
                            <i class="fas fa-copy"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
                            </ul>
                        </li>

                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Hospitals</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a href="{{url('hosregadd')}}">Add New Hospital</a>
                                </li>
                                <li>
                                <a href="{{url('ahospitals')}}">Hospital List</a>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Ambulances</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a href="{{url('avaamb')}}">View</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>ICU Beds</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a href="{{url('aicubeds')}}">View</a>
                                </li>
                                
                                
                            </ul>
                        </li>
                       
                        
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Patients</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a href="{{url('adminpatients')}}">View</a>
                                </li>
                                
                            </ul>
                
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>PCR Tests</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a href="{{url('atest')}}">Positive Reports.</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Admin Details</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                <a href="{{url('/adminchangepw')}}">Reset Password</a>
                                </li>

                                <li>
                                <a href="{{url('others')}}">Admins</a>
                                </li>
                                
                                
                            </ul>
                        </li>

                        


                    </ul>  

                   
                </nav>
            </div>
        </aside>
