<header id="header" class="u-header">
    <!-- Search -->
    <div id="searchPushTop" class="u-search-push-top u-unfold--jquery-slide u-unfold--hidden" style="display: none;">
      <div class="container position-relative">
        <div class="u-search-push-top__content">
          <!-- Close Button -->
          <button type="button" class="close u-search-push-top__close-btn target-of-invoker-has-unfolds" aria-haspopup="true" aria-expanded="false" aria-controls="searchPushTop" data-unfold-type="jquery-slide" data-unfold-target="#searchPushTop">
            <span aria-hidden="true">×</span>
          </button>
          <!-- End Close Button -->

          <!-- Input -->
          <form class="js-focus-state input-group input-group-lg">
            <input type="search" class="form-control" placeholder="Search Front" aria-label="Search Front">
            <div class="input-group-append">
              <button type="button" class="btn btn-primary">Search</button>
            </div>
          </form>
          <!-- End Input -->

          <!-- Content -->
          <div class="row d-none d-md-flex mt-7">
            <div class="col-sm-6">
              <strong class="d-block mb-2">Quick Links</strong>

              <div class="row">
                <!-- List Group -->
                <div class="col-6">
                  <div class="list-group list-group-transparent list-group-flush list-group-borderless">
                    <a class="list-group-item list-group-item-action" href="#">
                      <span class="fas fa-angle-right list-group-icon"></span>
                      Search Results List
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                      <span class="fas fa-angle-right list-group-icon"></span>
                      Search Results Grid
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                      <span class="fas fa-angle-right list-group-icon"></span>
                      About
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                      <span class="fas fa-angle-right list-group-icon"></span>
                      Services
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                      <span class="fas fa-angle-right list-group-icon"></span>
                      Invoice
                    </a>
                  </div>
                </div>
                <!-- End List Group -->

                <!-- List Group -->
                <div class="col-6">
                  <div class="list-group list-group-transparent list-group-flush list-group-borderless">
                    <a class="list-group-item list-group-item-action" href="#">
                      <span class="fas fa-angle-right list-group-icon"></span>
                      Profile
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                      <span class="fas fa-angle-right list-group-icon"></span>
                      User Contacts
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                      <span class="fas fa-angle-right list-group-icon"></span>
                      Reviews
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                      <span class="fas fa-angle-right list-group-icon"></span>
                      Settings
                    </a>
                  </div>
                </div>
                <!-- End List Group -->
              </div>
            </div>

            <div class="col-sm-6">
              <!-- Banner -->
              <div class="rounded u-search-push-top__banner">
                <div class="d-flex align-items-center">
                  <div class="u-search-push-top__banner-container">
                    <img class="img-fluid u-search-push-top__banner-img" src="{{ asset('default') }}/assets/img\mockups\img3.png" alt="Image Description">
                    <img class="img-fluid u-search-push-top__banner-img" src="{{ asset('default') }}/assets/img\mockups\img2.png" alt="Image Description">
                  </div>

                  <div>
                    <div class="mb-4">
                      <strong class="d-block mb-2">Featured Item</strong>
                      <p>Create astonishing web sites and pages.</p>
                    </div>
                    <a class="btn btn-xs btn-soft-success transition-3d-hover" href="index.html">Apply Now <span class="fas fa-angle-right ml-2"></span></a>
                  </div>
                </div>
              </div>
              <!-- End Banner -->
            </div>
          </div>
          <!-- End Content -->
        </div>
      </div>
    </div>
    <!-- End Search -->

    <div class="u-header__section">
      <!-- Topbar -->
      <div class="container u-header__hide-content pt-2">
        <div class="d-flex align-items-center">
          <!-- Language -->
          <div class="position-relative">
            <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;" role="button" aria-controls="languageDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#languageDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
               <img class="dropdown-item-icon" src="{{ asset('default') }}/assets/vendor\flag-icon-css\flags\4x3\us.svg" alt="SVG">
              <span class="d-inline-block d-sm-none">US</span>
              <span class="d-none d-sm-inline-block">United States</span>
            </a>

            <div id="languageDropdown" class="dropdown-menu dropdown-unfold u-unfold--css-animation u-unfold--hidden fadeOut" aria-labelledby="languageDropdownInvoker" style="animation-duration: 300ms;">
              <a class="dropdown-item active" href="#">English</a>
              <a class="dropdown-item" href="#">Deutsch</a>
              <a class="dropdown-item" href="#">Español&lrm;</a>
            </div>
          </div>
          <!-- End Language -->

          <div class="ml-auto">
            <!-- Jump To -->
            <div class="d-inline-block d-sm-none position-relative mr-2">
              <a id="jumpToDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;" role="button" aria-controls="jumpToDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#jumpToDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                Jump to
              </a>

              <div id="jumpToDropdown" class="dropdown-menu dropdown-unfold u-unfold--css-animation u-unfold--hidden fadeOut" aria-labelledby="jumpToDropdownInvoker" style="animation-duration: 300ms;">
                <a class="dropdown-item" href="..\pages\help.html">Help</a>
                <a class="dropdown-item" href="..\pages\contacts-agency.html">Contacts</a>
              </div>
            </div>
            <!-- End Jump To -->

            <!-- Links -->
            <div class="d-none d-sm-inline-block ml-sm-auto">
              <ul class="list-inline mb-0">
                <li class="list-inline-item mr-0">
                  <a class="u-header__navbar-link" href="..\pages\help.html">Help</a>
                </li>
                <li class="list-inline-item mr-0">
                  <a class="u-header__navbar-link" href="..\pages\contacts-agency.html">Contacts</a>
                </li>
              </ul>
            </div>
            <!-- End Links -->
          </div>

          <ul class="list-inline ml-2 mb-0">
            <!-- Search -->
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon btn-text-secondary target-of-invoker-has-unfolds" href="javascript:;" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="searchPushTop" data-unfold-type="jquery-slide" data-unfold-target="#searchPushTop">
                <span class="fas fa-search btn-icon__inner"></span>
              </a>
            </li>
            <!-- End Search -->

            <!-- Shopping Cart -->
            <li class="list-inline-item position-relative">
              <a id="shoppingCartDropdownInvoker" class="btn btn-xs btn-icon btn-text-secondary" href="javascript:;" role="button" aria-controls="shoppingCartDropdown" aria-haspopup="true" aria-expanded="false" data-unfold-event="hover" data-unfold-target="#shoppingCartDropdown" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                <span class="fas fa-shopping-cart btn-icon__inner"></span>
              </a>

              <div id="shoppingCartDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right text-center p-7 u-unfold--css-animation u-unfold--hidden fadeOut" aria-labelledby="shoppingCartDropdownInvoker" style="min-width: 250px; animation-duration: 300ms;">
                <span class="btn btn-icon btn-soft-primary rounded-circle mb-3">
                  <span class="fas fa-shopping-basket btn-icon__inner"></span>
                </span>
                <span class="d-block">Your Cart is Empty</span>
              </div>
            </li>
            <!-- End Shopping Cart -->

            <!-- Account Login -->
            <li class="list-inline-item">
              <!-- Account Sidebar Toggle Button -->
              <a id="sidebarNavToggler" class="btn btn-xs btn-text-secondary u-sidebar--account__toggle-bg ml-1 target-of-invoker-has-unfolds" href="javascript:;" role="button" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
                <span class="position-relative">
                  <span class="u-sidebar--account__toggle-text">Natalie Curtis</span>
                  <img class="u-sidebar--account__toggle-img" src="{{ asset('default') }}/assets/img\100x100\img1.jpeg" alt="Image Description">
                  <span class="badge badge-sm badge-success badge-pos rounded-circle">3</span>
                </span>
              </a>
              <!-- End Account Sidebar Toggle Button -->
            </li>
            <!-- End Account Login -->
          </ul>
        </div>
      </div>
      <!-- End Topbar -->

      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space hs-menu-initialized hs-menu-horizontal">
          <!-- Logo -->
          <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="..\home\index.html" aria-label="Front">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
              <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"></path>
              <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"></path>
              <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"></path>
              <path class="fill-white" d="M17.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4z"></path>
            </svg>
            <span class="u-header__navbar-brand-text">Front</span>
          </a>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn u-hamburger" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
            <span id="hamburgerTrigger" class="u-hamburger__box">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
            <ul class="navbar-nav u-header__navbar-nav">
              <!-- Home -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item hs-mega-menu-opened" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Home</a>

                <!-- Home - Mega Menu -->
                <div class="hs-mega-menu w-100 u-header__sub-menu animated hs-position-left fadeOut" aria-labelledby="homeMegaMenu" style="display: none;">
                  <div class="row no-gutters">
                    <div class="col-lg-6">
                      <!-- Banner Image -->
                      <div class="u-header__banner" style="background-image: url({{ asset('default') }}/assets/img/750x750/img1.jpeg);">
                        <div class="u-header__banner-content">
                          <div class="mb-4">
                            <span class="u-header__banner-title">Branding Works</span>
                            <p class="u-header__banner-text">Experience a level of our quality in both design &amp; customization works.</p>
                          </div>
                          <a class="btn btn-primary btn-sm transition-3d-hover" href="#">Learn More <span class="fas fa-angle-right ml-2"></span></a>
                        </div>
                      </div>
                      <!-- End Banner Image -->
                    </div>

                    <div class="col-lg-6">
                      <div class="row u-header__mega-menu-wrapper">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <span class="u-header__sub-menu-title">Classic</span>
                          <ul class="u-header__sub-menu-nav-group mb-3">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\index.html">Classic Agency</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\classic-business.html">Classic Business</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\classic-marketing.html">Classic Marketing</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\classic-consulting.html">Classic Consulting</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\classic-start-up.html">Classic Start-up <span class="badge badge-success badge-primary ml-1">New</span></a></li>
                          </ul>

                          <span class="u-header__sub-menu-title">Corporate</span>
                          <ul class="u-header__sub-menu-nav-group">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\corporate-agency.html">Corporate Agency</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\corporate-start-up.html">Corporate Start-Up</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\corporate-business.html">Corporate Business</a></li>
                          </ul>
                        </div>

                        <div class="col-sm-6">
                          <span class="u-header__sub-menu-title">Onepages</span>
                          <ul class="u-header__sub-menu-nav-group mb-3">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\onepage-creative.html">Onepage Creative <span class="badge badge-success badge-primary ml-1">New</span></a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\onepage-saas.html">Onepage SaaS <span class="badge badge-success badge-primary ml-1">New</span></a></li>
                          </ul>

                          <span class="u-header__sub-menu-title">Blog</span>
                          <ul class="u-header__sub-menu-nav-group mb-3">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\blog-agency.html">Blog Agency</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\blog-start-up.html">Blog Start-Up</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\blog-business.html">Blog Business</a></li>
                          </ul>

                          <span class="u-header__sub-menu-title">Portfolio</span>
                          <ul class="u-header__sub-menu-nav-group">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\portfolio-agency.html">Portfolio Agency</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="..\home\portfolio-profile.html">Portfolio Profile</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Home - Mega Menu -->
              </li>
              <!-- End Home -->

              <!-- Pages -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item hs-sub-menu-opened" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Pages</a>

                <!-- Pages - Submenu -->
                <ul id="pagesSubMenu" class="hs-sub-menu u-header__sub-menu animated fadeOut" aria-labelledby="pagesMegaMenu" style="min-width: 230px; display: none;">
                  <!-- Account -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesAccount" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesAccount">Account</a>

                    <ul id="navSubmenuPagesAccount" class="hs-sub-menu u-header__sub-menu animated" aria-labelledby="navLinkPagesAccount" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="dashboard.html">Dashboard</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="profile.html">Profile</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="my-tasks.html">My tasks</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="projects.html">Projects</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="members.html">Members</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="edit-profile.html">Edit profile</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="change-password.html">Change password</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="notifications.html">Notifications</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="activity.html">Activity</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="payment-methods.html">Payment methods</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="invite-friends.html">Invite friends</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="plans.html">Plans</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="api-token.html">API Token</a></li>
                    </ul>
                  </li>
                  <!-- End Account -->

                  <!-- Portfolio -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesPortfolio" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesPortfolio">Portfolio</a>

                    <ul id="navSubmenuPagesPortfolio" class="hs-sub-menu u-header__sub-menu animated" aria-labelledby="navLinkPagesPortfolio" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\portfolio\boxed-classic.html">All layouts</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\portfolio\case-studies-simple.html">Case Studies Simple</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\portfolio\case-studies-modern.html">Case Studies Modern</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\portfolio\single-page-simple.html">Single Page Simple</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\portfolio\single-page-grid.html">Single Page Grid</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\portfolio\single-page-masonry.html">Single Page Masonry</a></li>
                    </ul>
                  </li>
                  <!-- End Portfolio -->

                  <!-- About -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesAbout" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesAbout">About</a>

                    <ul id="navSubmenuPagesAbout" class="hs-sub-menu u-header__sub-menu animated" aria-labelledby="navLinkPagesAbout" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\about-agency.html">About Agency</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\about-start-up.html">About Start-Up</a></li>
                    </ul>
                  </li>
                  <!-- About -->

                  <!-- Services -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesServices" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesServices">Services</a>

                    <ul id="navSubmenuPagesServices" class="hs-sub-menu u-header__sub-menu animated" aria-labelledby="navLinkPagesServices" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\services-agency.html">Services Agency</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\services-start-up.html">Services Start-Up</a></li>
                    </ul>
                  </li>
                  <!-- Services -->

                  <!-- Careers -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesCareers" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesCareers">Careers</a>

                    <ul id="navSubmenuPagesCareers" class="hs-sub-menu u-header__sub-menu animated" aria-labelledby="navLinkPagesCareers" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\careers.html">Careers</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\careers-single.html">Careers Single</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\hire-us.html">Hire Us</a></li>
                    </ul>
                  </li>
                  <!-- Careers -->

                  <!-- Login -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesLogin" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesLogin">Login &amp; Signup</a>

                    <ul id="navSubmenuPagesLogin" class="hs-sub-menu u-header__sub-menu animated" aria-labelledby="navLinkPagesLogin" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\login.html">Login</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\signup.html">Signup</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\recover-account.html">Recover Account</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\login-simple.html">Login Simple</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\signup-simple.html">Signup Simple</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\recover-account-simple.html">Recover Account Simple</a></li>
                    </ul>
                  </li>
                  <!-- Signup -->

                  <!-- Contacts -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkContactsServices" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuContactsServices">Contacts</a>

                    <ul id="navSubmenuContactsServices" class="hs-sub-menu u-header__sub-menu animated" aria-labelledby="navLinkContactsServices" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\contacts-agency.html">Contacts Agency</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\contacts-start-up.html">Contacts Start-Up</a></li>
                    </ul>
                  </li>
                  <!-- Contacts -->

                  <!-- Utilities -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesUtilities" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesUtilities">Utilities</a>

                    <ul id="navSubmenuPagesUtilities" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesUtilities" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\help.html">Help</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\help-article.html">Help article</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\faq.html">FAQ</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\pricing.html">Pricing</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\invoice.html">Invoice</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\terms.html">Terms &amp; Conditions</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\privacy.html">Privacy &amp; Policy</a></li>
                    </ul>
                  </li>
                  <!-- Utilities -->

                  <!-- Specialty -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesSpecialty" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesSpecialty">Specialty</a>

                    <ul id="navSubmenuPagesSpecialty" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesSpecialty" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\cover-page.html">Cover Page</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\coming-soon.html">Coming Soon</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\maintenance-mode.html">Maintenance Mode</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\pages\error-404.html">Error 404</a></li>
                    </ul>
                  </li>
                  <!-- Specialty -->
                </ul>
                <!-- End Pages - Submenu -->
              </li>
              <!-- End Pages -->

              <!-- Blog -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut">
                <a id="blogMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Blog</a>

                <!-- Blog - Submenu -->
                <ul id="blogSubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px; display: none;">
                  <!-- Classic -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogClassic" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogClassic">Classic</a>

                    <ul id="navSubmenuBlogClassic" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogClassic" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\classic-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\classic-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\classic-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- Classic -->

                  <!-- Grid -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogGrid" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogGrid">Grid</a>

                    <ul id="navSubmenuBlogGrid" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogGrid" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\grid-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\grid-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\grid-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- Grid -->

                  <!-- List -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogList" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogList">List</a>

                    <ul id="navSubmenuBlogList" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogList" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\list-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\list-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\list-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- List -->

                  <!-- Modern -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogCard" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogCard">Modern</a>

                    <ul id="navSubmenuBlogCard" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogCard" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\modern-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\modern-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\modern-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- Grid Modern -->

                  <!-- Masonry -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogGridMinimal" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogGridMinimal">Masonry</a>

                    <ul id="navSubmenuBlogGridMinimal" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogGridMinimal" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\masonry-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\masonry-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\masonry-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- Masonry -->

                  <!-- Single Article -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogGridMasonry" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogGridMasonry">Single Article</a>

                    <ul id="navSubmenuBlogGridMasonry" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogGridMasonry" style="min-width: 230px; display: none;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\single-article-classic.html">Classic</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="..\blog\single-article-simple.html">Simple</a></li>
                    </ul>
                  </li>
                  <!-- Single Article -->
                </ul>
                <!-- End Submenu -->
              </li>
              <!-- End Blog -->

              <!-- Shop -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="440px" data-position="right">
                <a id="shopMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Shop</a>

                <!-- Shop - Mega Menu -->
                <div class="hs-mega-menu u-header__sub-menu u-header__mega-menu-position-right-fix--md" aria-labelledby="shopMegaMenu" style="display: none;">
                  <div class="u-header__mega-menu-wrapper">
                    <span class="u-header__sub-menu-title">Shop Elements</span>

                    <div class="row">
                      <div class="col-sm-6">
                        <ul class="u-header__sub-menu-nav-group">
                          <li><a class="nav-link u-header__sub-menu-nav-link" href="..\shop\classic.html">Classic</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link" href="..\shop\masonry.html">Masonry</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link" href="..\shop\single-product.html">Single Product</a></li>
                        </ul>
                      </div>

                      <div class="col-sm-6">
                        <ul class="u-header__sub-menu-nav-group">
                          <li><a class="nav-link u-header__sub-menu-nav-link" href="..\shop\cart.html">Cart</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link" href="..\shop\checkout.html">Checkout</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- Mega Menu Banner -->
                  <div class="u-header__product-banner">
                    <div class="d-flex align-items-end">
                      <img class="img-fluid mr-4" src="{{ asset('default') }}/assets/img\mockups\img4.png" alt="Image Description">
                      <div class="u-header__product-banner-content">
                        <div class="mb-4">
                          <span class="u-header__product-banner-title">Win T-shirt</span>
                          <p class="u-header__product-banner-text">Win one of our Front brand T-shirts.</p>
                        </div>
                        <a class="btn btn-sm btn-soft-primary transition-3d-hover" href="..\shop\classic.html">Learn More <span class="fas fa-angle-right ml-2"></span></a>
                      </div>
                    </div>
                  </div>
                  <!-- End Mega Menu Banner -->
                </div>
                <!-- End Shop - Mega Menu -->
              </li>
              <!-- End Shop -->

              <!-- Demos -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item hs-mega-menu-opened" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="600px" data-position="right">
                <a id="demosMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Demos</a>

                <!-- Demos - Mega Menu -->
                <div class="hs-mega-menu w-100 u-header__sub-menu animated hs-position-right fadeOut" aria-labelledby="demosMegaMenu" style="display: none; max-width: 600px;">
                  <div class="row no-gutters">
                    <div class="col-md-6">
                      <!-- Promo Item -->
                      <div class="u-header__promo-item">
                        <a class="u-header__promo-link" href="..\house\index.html">
                          <div class="media align-items-center">
                            <img class="js-svg-injector u-header__promo-icon" src="" alt="SVG">
                            <div class="media-body">
                              <span class="u-header__promo-title">House</span>
                              <small class="u-header__promo-text">Real estate demo.</small>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- End Promo Item -->

                      <!-- Promo Item -->
                      <div class="u-header__promo-item">
                        <a class="u-header__promo-link" href="..\job\index.html">
                          <div class="media align-items-center">
                            <img class="js-svg-injector u-header__promo-icon" src="" alt="SVG">
                            <div class="media-body">
                              <span class="u-header__promo-title">Job</span>
                              <small class="u-header__promo-text">Job vacancy demo.</small>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- End Promo Item -->

                      <!-- Promo Item -->
                      <div class="u-header__promo-item">
                        <a class="u-header__promo-link" href="..\crypto\index.html">
                          <div class="media align-items-center">
                            <img class="js-svg-injector u-header__promo-icon" src="" alt="SVG">
                            <div class="media-body">
                              <span class="u-header__promo-title">Crypto landing</span>
                              <small class="u-header__promo-text">Cryptocurrency demo.</small>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- End Promo Item -->
                    </div>

                    <!-- Promo -->
                    <div class="col-md-6 u-header__promo">
                      <a class="d-block u-header__promo-inner" href="#">
                        <div class="position-relative">
                          <img class="img-fluid rounded mb-3" src="{{ asset('default') }}/assets/img\380x227\img6.jpeg" alt="Image Description">
                          <span class="badge badge-success badge-pill badge-pos shadow-sm mt-3">New</span>
                        </div>
                        <span class="text-secondary font-size-1">Front makes you look at things from a different perspectives.</span>
                      </a>
                    </div>
                    <!-- End Promo -->
                  </div>
                </div>
                <!-- End Demos - Mega Menu -->
              </li>
              <!-- End Demos -->

              <!-- Docs -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item hs-mega-menu-opened" data-event="hover" data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="260px" data-position="right">
                <a id="docsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Docs</a>

                <!-- Docs - Submenu -->
                <div class="hs-mega-menu u-header__sub-menu animated hs-position-right fadeOut" aria-labelledby="docsMegaMenu" style="min-width: 330px; display: none; max-width: 260px;">
                  <!-- Promo Item -->
                  <div class="u-header__promo-item">
                    <a class="u-header__promo-link" href="..\..\documentation\index.html">
                      <div class="media align-items-center">
                        <img class="js-svg-injector u-header__promo-icon" src="" alt="SVG">
                        <div class="media-body">
                          <span class="u-header__promo-title">
                            Documentation
                            <span class="badge badge-primary badge-pill ml-1">v2.0</span>
                          </span>
                          <small class="u-header__promo-text">Development guides</small>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- End Promo Item -->

                  <!-- Promo Item -->
                  <div class="u-header__promo-item">
                    <a class="u-header__promo-link" href="..\..\starter\index.html">
                      <div class="media align-items-center">
                        <img class="js-svg-injector u-header__promo-icon" src="" alt="SVG">
                        <div class="media-body">
                          <span class="u-header__promo-title">Get started</span>
                          <small class="u-header__promo-text">Components and snippets</small>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- End Promo Item -->

                  <div class="u-header__promo-footer">
                    <!-- List -->
                    <div class="row no-gutters">
                      <div class="col-6">
                        <div class="u-header__promo-footer-item">
                          <small class="text-muted d-block">Check what's new</small>
                          <a class="small" href="..\..\documentation\getting-started\changelog.html">
                            Changelog
                          </a>
                        </div>
                      </div>
                      <div class="col-6 u-header__promo-footer-ver-divider">
                        <div class="u-header__promo-footer-item">
                          <small class="text-muted d-block">Have a question?</small>
                          <a class="small" href="..\..\..\..\contact-us.html">
                            Contact us
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- End List -->
                  </div>
                </div>
                <!-- End Docs - Submenu -->
              </li>
              <!-- End Docs -->

              <!-- Button -->
              <li class="nav-item u-header__nav-last-item">
                <a class="btn btn-sm btn-primary transition-3d-hover" href="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/" target="_blank">
                  Buy Now
                </a>
              </li>
              <!-- End Button -->
            </ul>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
