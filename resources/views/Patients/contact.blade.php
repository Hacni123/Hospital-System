<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Material Dash</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../../assets/css/demo/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
    <title>Family Medicine Practice</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<style>

body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;
		height: 400px;
	}
	.col-md-3{
		background: #76a2f3;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Life Care</title>
<!-- plugins:css -->
<link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
<!-- endinject -->
<!-- Plugin css for this page -->
<link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
<!-- End plugin css for this page -->
<!-- Layout styles -->
<link rel="stylesheet" href="../assets/css/demo/style.css">
<!-- End layout styles -->
<link rel="shortcut icon" href="../assets/images/favicon.png" />

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->
<body>
	
    <script src="../assets/js/preloader.js"></script>
    <div class="body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
        <div class="mdc-drawer__header">
          <a href="{{url('')}}" class="brand-logo">
            <img src="../assets/images/icon-logo.png" alt="logo">
          </a>
        </div>
        <div class="mdc-drawer__content">
          <div class="user-info">
            <p class="name" style="font-size: 22px">Life Care</p>
            <p class="email">info@Lifecare.com</p>
          </div>
          <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{url('index1')}}">
                  <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                  Dashboard
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="../../pages/forms/basic-forms.html">
                  <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                  My Appointments
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="sample-page-submenu">
                  <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
                  Checking_Availability
                  <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                </a>
                <div class="mdc-expansion-panel" id="sample-page-submenu">
                  <nav class="mdc-list mdc-drawer-submenu">
                    <div class="mdc-list-item mdc-drawer-item">
                      <a class="mdc-drawer-link" href="{{url('icubedsavail')}}">
                       ICU Beds
                      </a>
                    </div>
                    <div class="mdc-list-item mdc-drawer-item">
                      <a class="mdc-drawer-link" href="{{url('ambulanceavail')}}">
                       Ambulance Services
                      </a>
                    </div>
                  
                   </nav>
                </div>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-sub-menu">
                  <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                  Booking_Details
                  <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                </a>
                <div class="mdc-expansion-panel" id="ui-sub-menu">
                  <nav class="mdc-list mdc-drawer-submenu">
                    <div class="mdc-list-item mdc-drawer-item">
                      <a class="mdc-drawer-link" href="{{url('icubedsP')}}">
                        ICU Beds
                      </a>
                    </div>
                    <div class="mdc-list-item mdc-drawer-item">
                      <a class="mdc-drawer-link" href="{{url('ambulanceP')}}">
                        Ambulance Services
                      </a>
                    </div>
                    <div class="mdc-list-item mdc-drawer-item">
                      <a class="mdc-drawer-link" href="{{url('pcrtestP')}}">
                        PCR Test
                      </a>
                    </div>
                    <div class="mdc-list-item mdc-drawer-item">
                      <a class="mdc-drawer-link" href="{{url('pcrtestavailP')}}">
                        PCR Test Details
                      </a>
                    </div>
                  </nav>
                </div>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{url('doctorsdetails')}}">
                  <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                  Doctor_Details
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
                <a class="mdc-drawer-link" href="{{ url('contact') }}">
                  <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">description</i>
                 Contact Us
                </a>
              </div>
            </nav>
          </div>
          <div class="profile-actions">
            <a href="javascript:;">Settings</a>
            <span class="divider"></span>
            <a href="javascript:;">Logout</a>
          </div>
          <div class="mdc-card premium-card">
            <div class="d-flex align-items-center">
              <div class="mdc-card icon-card box-shadow-0">
                <i class="mdi mdi-shield-outline"></i>
              </div>
              <div>
                <p class="mt-0 mb-1 ml-2 font-weight-bold tx-12">Material Dash</p>
                <p class="mt-0 mb-0 ml-2 tx-10">Pro available</p>
              </div>
            </div>
            <p class="tx-8 mt-3 mb-1">More elements. More Pages.</p>
            <p class="tx-8 mb-3">Starting from $25.</p>
            <a href="https://www.bootstrapdash.com/product/material-design-admin-template/" target="_blank">
              <span class="mdc-button mdc-button--raised mdc-button--white">Upgrade to Pro</span>
            </a>
          </div>
        </div>
      </aside>
      <!-- partial -->
  
      <div class="main-wrapper mdc-drawer-app-content">
        <!-- partial:../../partials/_navbar.html -->
        <header class="mdc-top-app-bar">
          <div class="mdc-top-app-bar__row">
            <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
              <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
              <span class="mdc-top-app-bar__title">Greetings Clyde!</span>
              <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
                <i class="material-icons mdc-text-field__icon">search</i>
                <input class="mdc-text-field__input" id="text-field-hero-input">
                <div class="mdc-notched-outline">
                  <div class="mdc-notched-outline__leading"></div>
                  <div class="mdc-notched-outline__notch">
                    <label for="text-field-hero-input" class="mdc-floating-label">Search..</label>
                  </div>
                  <div class="mdc-notched-outline__trailing"></div>
                </div>
              </div>
            </div>
            <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
              <div class="menu-button-container menu-profile d-none d-md-block">
                <button class="mdc-button mdc-menu-button">
                  <span class="d-flex align-items-center">
                    <span class="figure">
                      <img src="../../../assets/images/faces/face1.jpg" alt="user" class="user">
                    </span>
                    <span class="user-name">Clyde Miles</span>
                  </span>
                </button>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                  <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon-only">
                        <i class="mdi mdi-account-edit-outline text-primary"></i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">Edit profile</h6>
                      </div>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon-only">
                        <i class="mdi mdi-settings-outline text-primary"></i>                      
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">Logout</h6>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="divider d-none d-md-block"></div>
              <div class="menu-button-container d-none d-md-block">
                <button class="mdc-button mdc-menu-button">
                  <i class="mdi mdi-settings"></i>
                </button>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                  <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon-only">
                        <i class="mdi mdi-alert-circle-outline text-primary"></i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">Settings</h6>
                      </div>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon-only">
                        <i class="mdi mdi-progress-download text-primary"></i>                      
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">Update</h6>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="menu-button-container">
                <button class="mdc-button mdc-menu-button">
                  <i class="mdi mdi-bell"></i>
                </button>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                  <h6 class="title"> <i class="mdi mdi-bell-outline mr-2 tx-16"></i> Notifications</h6>
                  <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon">
                        <i class="mdi mdi-email-outline"></i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">You received a new message</h6>
                        <small class="text-muted"> 6 min ago </small>
                      </div>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon">
                        <i class="mdi mdi-account-outline"></i>                      
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">New user registered</h6>
                        <small class="text-muted"> 15 min ago </small>
                      </div>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon">
                        <i class="mdi mdi-alert-circle-outline"></i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">System Alert</h6>
                        <small class="text-muted"> 2 days ago </small>
                      </div>
                    </li> 
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon">
                        <i class="mdi mdi-update"></i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">You have a new update</h6>
                        <small class="text-muted"> 3 days ago </small>
                      </div>
                    </li> 
                  </ul>
                </div>
              </div>
              <div class="menu-button-container">
                <button class="mdc-button mdc-menu-button">
                  <i class="mdi mdi-email"></i>
                  <span class="count-indicator">
                    <span class="count">3</span>
                  </span>
                </button>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                  <h6 class="title"><i class="mdi mdi-email-outline mr-2 tx-16"></i> Messages</h6>
                  <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail">
                        <img src="../../../assets/images/faces/face4.jpg" alt="user">
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">Mark send you a message</h6>
                        <small class="text-muted"> 1 Minutes ago </small>
                      </div>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail">
                        <img src="../../../assets/images/faces/face2.jpg" alt="user">
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">Cregh send you a message</h6>
                        <small class="text-muted"> 15 Minutes ago </small>
                      </div>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail">
                        <img src="../../../assets/images/faces/face3.jpg" alt="user">
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">Profile picture updated</h6>
                        <small class="text-muted"> 18 Minutes ago </small>
                      </div>
                    </li>                
                  </ul>
                </div>
              </div>
              <div class="menu-button-container d-none d-md-block">
                <button class="mdc-button mdc-menu-button">
                  <i class="mdi mdi-arrow-down-bold-box"></i>
                </button>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                  <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon-only">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">Lock screen</h6>
                      </div>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                      <div class="item-thumbnail item-thumbnail-icon-only">
                        <i class="mdi mdi-logout-variant text-primary"></i>                      
                      </div>
                      <div class="item-content d-flex align-items-start flex-column justify-content-center">
                        <h6 class="item-subject font-weight-normal">Logout</h6>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </header>












<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h4></h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">First Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Last Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Comment:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>



</div>
</div>
</main>
<!-- partial:../../partials/_footer.html -->
<footer>
<div class="mdc-layout-grid">
  <div class="mdc-layout-grid__inner">
    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
    </div>
    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
    </div>
  </div>
</div>
</footer>
<!-- partial -->
</div>
</div>
</div>
<!-- plugins:js -->
<script src="../../../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="../../../assets/js/material.js"></script>
<script src="../../../assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<!-- End custom js for this page-->






</body>

</html>