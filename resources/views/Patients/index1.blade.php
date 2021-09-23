<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
<script src="../assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
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
              <a class="mdc-drawer-link" href="{{ url('myappointment') }}">
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
                    <a class="mdc-drawer-link"  href="{{url('icubedsP')}}">
                     ICU Beds
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link"  href="{{url('ambulanceP')}}">
                     Ambulance Services
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link"  href="{{url('pcrtestP')}}">
                     PCR Test
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link"  href="{{url('pcrtestavailP')}}">
                     PCR Test Details
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{ url('logout') }}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">grid_on</i>
                Logout
              </a>
            </div> 
          </nav>
        </div>
        
        
      </div>
    </aside>







    
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- partial:partials/_navbar.html -->
      <header class="mdc-top-app-bar">
        <div class="mdc-top-app-bar__row">
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <span class="mdc-top-app-bar__title">Greetings Arani!</span>
            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
              <input class="mdc-text-field__input" id="text-field-hero-input">
              <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                
                <div class="mdc-notched-outline__trailing"></div>
              </div>
            </div>
          </div>
          <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
                <span class="d-flex align-items-center">
                  <span class="figure">
                    <img src="../assets/images/faces/face2.jpg" alt="user" class="user">
                  </span>
                  <span class="user-name">Arani</span>
                </span>
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                    <div class="item-thumbnail item-thumbnail-icon-only">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                </ul>
              </div>
            </div>
            <div class="divider d-none d-md-block"></div>
            <div class="menu-button-container d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li>
                    <div class="item-thumbnail item-thumbnail-icon-only">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="menu-button-container">
              <button class="mdc-button mdc-menu-button">
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li>
                    
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li>
                    <div class="item-thumbnail item-thumbnail-icon">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li> 
                  <li class="mdc-list-item" role="menuitem">
                    <div class="item-thumbnail item-thumbnail-icon">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li> 
                </ul>
              </div>
            </div>
            <div class="menu-button-container">
             
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                  
                  
                                 
                </ul>
              </div>
            </div>
            <div class="menu-button-container d-none d-md-block">
              <button class="mdc-button mdc-menu-button">
              </button>
              <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                    <div class="item-thumbnail item-thumbnail-icon-only">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li>
                    <div class="item-thumbnail item-thumbnail-icon-only">
                    </div>
                    <div class="item-content d-flex align-items-start flex-column justify-content-center">
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              
             
              
              
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card">
                  <div class="d-flex justify-content-between">
                    <h4 class="card-title mb-0">Key symptoms</h4>
                   
                  </div>
                  <img src="assets/images/Capture.png" alt="logo">
                 
                </div> 
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet" width=55% hight=55%>
                <div class="mdc-card bg-success text-white">
                  <div class="d-flex justify-content-between">
                    <img src="assets/images/Advice.png" alt="logo" width=75% hight=55%>
                   
                  </div>
                  
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-4-tablet">
                <div class="mdc-card bg-info text-white">
                    <div class="d-flex justify-content-between">
                      <img src="assets/images/temp.png" alt="logo" width=75% hight=55%>
                    
                    </div>
                    
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-8">
                <div class="mdc-card">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title mb-2 mb-sm-0">Statistics</h4>
                    
                  </div>
                  <div class="d-block d-sm-flex justify-content-between align-items-center">
                    <h6 class="card-sub-title mb-0">New Cases and Deaths</h6>
                    <div class="mdc-tab-wrapper revenue-tab mdc-tab--secondary"> 
                      <div class="mdc-tab-bar" role="tablist">
                        <div class="mdc-tab-scroller">
                          <div class="mdc-tab-scroller__scroll-area">
                            <div class="mdc-tab-scroller__scroll-content">
                            <img src="assets/images/graph.png" alt="logo" width=75% hight=55%>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-8-tablet">
                <div class="mdc-card">
                  <div class="d-flex d-lg-block d-xl-flex justify-content-between">
                    <div>
                      <h4 class="card-title">What should I do if I have Covid?</h4>
                      <ul>
                        <li>If you have a positive test result you should self-isolate at home for at least 10 days from the time symptoms started.</li>
                        <li>You must stay away from other members of your household, who must also self-isolate for at least 10 days.</li>
                        <li>Most people will have only mild symptoms, which can be managed with pain relief (like paracetamol), bed rest and plenty of fluids.</li>
                        <li>You should not even go to a GP surgery, pharmacy or hospital.</li>
                      </ul>
                    </div>
                   
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </main>
        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                <span class="text-center text-sm-left d-block d-sm-inline-block tx-14">Copyright © <a href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2020</span>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex justify-content-end">
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center tx-14">Free <a href="https://www.bootstrapdash.com/material-design-dashboard/" target="_blank"> material admin </a> dashboards from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../assets/vendors/chartjs/Chart.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../assets/js/material.js"></script>
  <script src="../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html> 