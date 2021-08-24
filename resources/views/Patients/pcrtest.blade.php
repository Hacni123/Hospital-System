<!DOCTYPE html>
<html>
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
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 38px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("/uploads/media/default/0001/02/174b2e72df50743dfaa0a3bf9d2e59d8b42c91e1.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
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
                <a class="mdc-drawer-link" href="{{url('')}}">
                  <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                  Dashboard
                </a>
              </div>
              <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{url('myappointment')}}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
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














    <div class="testbox">
        <div class="banner">
        </div>
        <br/>
        <fieldset>
         @foreach ($pcr as $pcr1 )
         
          @endforeach
        </fieldset>

        <br/>
        <form action="{{ url('/pcrtestP') }}" method="post">
          {{ csrf_field() }}

          <fieldset>
            <legend>Appointment Information</legend>
            <div class="item">
              <label for="instructions">Hospital ID: </label>
              <textarea id="hospital_id" name="hospital_id" rows="2">{{ $pcr1->hospital_id }}</textarea>
            </div>
          <div class="item">
            <label for="instructions">Patient ID: </label>
            <textarea id="patient_id" name="patient_id" rows="2">{{ $pcr1->id }}</textarea>
          </div>
        
         
          </fieldset>
          <div class="btn-block">
          <button type="submit" href="{{ '/index1' }}">Submit</button>
          </div>
        </form>
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