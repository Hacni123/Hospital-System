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
</head>
<body>
<script src="../assets/js/preloader.js"></script>
  <div class="body-wrapper">
    <!-- partial:../../partials/_sidebar.html -->
    <aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a href="../../index.html" class="brand-logo">
          <img src="../../../assets/images/logo.svg" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
          <p class="name">Life Care</p>
          <p class="email">info@Lifecare.com</p>
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{url('index')}}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="../../pages/forms/basic-forms.html">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Forms
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
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('pcrtestavail')}}">
                      PCR Test
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
                    <a class="mdc-drawer-link" href="{{url('icubeds')}}">
                      ICU Beds
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('ambulance')}}">
                      Ambulance Services
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('pcrtest')}}">
                     PCR Test
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
              <a class="mdc-drawer-link" href="https://www.bootstrapdash.com/demo/material-admin-free/jquery/documentation/documentation.html" target="_blank">
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
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
          <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-8-tablet">
                <div class="mdc-card">
                  <h6 class="card-title">Text Buttons</h6>
                  <div class="template-demo">
                    <button class="mdc-button">
                      Baseline
                    </button>
                    <button class="mdc-button mdc-button--dense">
                      Dense
                    </button>
                    <button class="mdc-button">
                      <i class="material-icons mdc-button__icon">favorite</i>
                      Icon
                    </button>
                    <a href="#" class="mdc-button">
                      Link
                    </a>
                    <button class="mdc-button text-button--secondary">
                      Secondary
                    </button>
                    <button class="mdc-button text-button--success">
                      Success
                    </button>
                    <button class="mdc-button text-button--info">
                      Info
                    </button>
                    <button class="mdc-button text-button--warning">
                      Warning
                    </button>
                    <button class="mdc-button text-button--light">
                      Light
                    </button>
                    <button class="mdc-button text-button--dark">
                      Dark
                    </button>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-12-tablet">
                <div class="mdc-card">
                  <h6 class="card-title">Raised Button</h6>
                  <div class="template-demo">
                    <button class="mdc-button mdc-button--raised">
                      Baseline
                    </button>
                    <button class="mdc-button mdc-button--raised mdc-button--dense">
                      Dense
                    </button>
                    <button class="mdc-button mdc-button--raised">
                      <i class="material-icons mdc-button__icon">favorite</i>
                      Icon
                    </button>
                    <a href="javascript:void(0)" class="mdc-button mdc-button--raised">
                      Link
                    </a>
                    <button class="mdc-button mdc-button--raised filled-button--secondary">
                      Secondary
                    </button>
                    <button class="mdc-button mdc-button--raised filled-button--success">
                      Success
                    </button>
                    <button class="mdc-button mdc-button--raised filled-button--info">
                      Info
                    </button>
                    <button class="mdc-button mdc-button--raised filled-button--warning">
                      Warning
                    </button>
                    <button class="mdc-button mdc-button--raised filled-button--light">
                      Light
                    </button>
                    <button class="mdc-button mdc-button--raised filled-button--dark">
                      Dark
                    </button>
                  </div>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-12-tablet">
                <div class="mdc-card">
                  <section class="mdc-card__primary">
                    <h6 class="card-title">Unelevated Button</h6>
                  </section>
                  <section class="mdc-card__supporting-text">
                    <div class="template-demo">
                      <button class="mdc-button mdc-button--unelevated">
                        Baseline
                      </button>
                      <button class="mdc-button mdc-button--unelevated mdc-button--dense">
                        Dense
                      </button>
                      <button class="mdc-button mdc-button--unelevated">
                        <i class="material-icons mdc-button__icon">favorite</i>
                        Icon
                      </button>
                      <a class="mdc-button mdc-button--unelevated">
                        Link
                      </a>
                      <button class="mdc-button mdc-button--unelevated filled-button--secondary">
                        Secondary
                      </button>
                      <button class="mdc-button mdc-button--unelevated filled-button--success">
                        Success
                      </button>
                      <button class="mdc-button mdc-button--unelevated filled-button--info">
                        Info
                      </button>
                      <button class="mdc-button mdc-button--unelevated filled-button--warning">
                        Warning
                      </button>
                      <button class="mdc-button mdc-button--unelevated filled-button--light">
                        Light
                      </button>
                      <button class="mdc-button mdc-button--unelevated filled-button--dark">
                        Dark
                      </button>
                    </div>
                  </section>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-12-tablet">
                <div class="mdc-card">
                  <section class="mdc-card__primary">
                    <h6 class="card-title">Outlined Button</h6>
                  </section>
                  <section class="mdc-card__supporting-text">
                    <div class="template-demo">
                      <button class="mdc-button mdc-button--outlined">
                        Baseline
                      </button>
                      <button class="mdc-button mdc-button--outlined mdc-button--dense">
                        Dense
                      </button>
                      <button class="mdc-button mdc-button--outlined">
                        <i class="material-icons mdc-button__icon">favorite</i>
                        Icon
                      </button>
                      <a href="javascript:;" class="mdc-button mdc-button--outlined">
                        Link
                      </a>
                      <button class="mdc-button mdc-button--outlined outlined-button--secondary">
                        Secondary
                      </button>
                      <button class="mdc-button mdc-button--outlined outlined-button--success">
                        Success
                      </button>
                      <button class="mdc-button mdc-button--outlined outlined-button--info">
                        Info
                      </button>
                      <button class="mdc-button mdc-button--outlined outlined-button--warning">
                        Warning
                      </button>
                      <button class="mdc-button mdc-button--outlined outlined-button--light">
                        Light
                      </button>
                      <button class="mdc-button mdc-button--outlined outlined-button--dark">
                        Dark
                      </button>
                    </div>
                  </section>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-12-tablet">
                <div class="mdc-card">
                  <section class="mdc-card__primary">
                    <h6 class="card-title">Icon Button</h6>
                  </section>
                  <section class="mdc-card__supporting-text">
                    <div class="template-demo">
                      <button class="mdc-button mdc-button--raised icon-button">
                        <i class="material-icons mdc-button__icon">favorite</i>
                      </button>
                      <button class="mdc-button mdc-button--raised icon-button filled-button--secondary">
                        <i class="material-icons mdc-button__icon">delete</i>
                      </button>
                      <button class="mdc-button mdc-button--raised icon-button filled-button--success">
                        <i class="material-icons mdc-button__icon">colorize</i>
                      </button>
                      <button class="mdc-button mdc-button--raised icon-button filled-button--info">
                        <i class="material-icons mdc-button__icon">lock</i>
                      </button>
                      <button class="mdc-button mdc-button--raised icon-button filled-button--warning">
                        <i class="material-icons mdc-button__icon">add</i>
                      </button>
                      <button class="mdc-button mdc-button--raised icon-button filled-button--light">
                        <i class="material-icons mdc-button__icon">event_available</i>
                      </button>
                      <button class="mdc-button mdc-button--raised icon-button filled-button--dark">
                        <i class="material-icons mdc-button__icon">notifications_none</i>
                      </button>
                      <a href="javascript:;" class="mdc-button mdc-button--raised icon-button">
                        <i class="material-icons mdc-button__icon">get_app</i>
                      </a>
                    </div>
                  </section>
                </div>
              </div>
              <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6 mdc-layout-grid__cell--span-12-tablet">
                <div class="mdc-card">
                  <h6 class="card-title mb-4">Dropdown Menu</h6>
                  <div class="mdc-layout-grid__inner">
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <h6 class="card-sub-title">Default Menu</h6>
                        <div class="menu-button-container">
                          <button class="mdc-button mdc-menu-button mdc-button--raised">
                            Toggle Dropdown
                          </button>
                          <div class="mdc-menu mdc-menu-surface" tabindex="-1" id="demo-menu">
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                              <li class="mdc-list-item" role="menuitem">
                                <h6 class="item-subject font-weight-normal">Back</h6>
                              </li>
                              <li class="mdc-list-item" role="menuitem">
                                <h6 class="item-subject font-weight-normal">Forward</h6>
                              </li>
                              <li class="mdc-list-item" role="menuitem">
                                <h6 class="item-subject font-weight-normal">Reload</h6>
                              </li>
                              <li class="mdc-list-divider"></li>
                              <li class="mdc-list-item" role="menuitem">
                                <h6 class="item-subject font-weight-normal">Save As..</h6>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <h6 class="card-sub-title">Icon Menu</h6>
                        <div class="menu-button-container">
                          <button class="mdc-button mdc-menu-button mdc-button--raised icon-button shaped-button secondary-filled-button">
                            <i class="material-icons mdc-button__icon">add</i>
                          </button>
                          <div class="mdc-menu mdc-menu-surface" tabindex="-1" id="demo-menu">
                            <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                              <li class="mdc-list-item" role="menuitem">
                                <h6 class="item-subject font-weight-normal">Back</h6>
                              </li>
                              <li class="mdc-list-item" role="menuitem">
                                <h6 class="item-subject font-weight-normal">Forward</h6>
                              </li>
                              <li class="mdc-list-item" role="menuitem">
                                <h6 class="item-subject font-weight-normal">Reload</h6>
                              </li>
                              <li class="mdc-list-divider"></li>
                              <li class="mdc-list-item" role="menuitem">
                                <h6 class="item-subject font-weight-normal">Save As..</h6>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Ripple Enabled Buttons Ends -->
            </div>
          </div>
        </main>
        <!-- partial:../../partials/_footer.html -->
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