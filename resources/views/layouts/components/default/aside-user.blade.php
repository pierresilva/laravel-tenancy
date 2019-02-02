<!-- Account Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-sidebar--account__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex justify-content-between align-items-center pt-4 px-7">
            <h3 class="h6 mb-0">My Account</h3>

            <button type="button" class="close ml-auto" aria-controls="sidebarContent" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent" data-unfold-type="css-animation" data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight" data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body">
            <!-- Holder Info -->
            <header class="d-flex align-items-center u-sidebar--account__holder mt-3">
              <div class="position-relative">
                <img class="u-sidebar--account__holder-img" src="{{ asset('default') }}/assets/img\100x100\img1.jpeg" alt="Image Description">
                <span class="badge badge-xs badge-outline-success badge-pos rounded-circle"></span>
              </div>
              <div class="ml-3">
                <span class="font-weight-semi-bold">{{ auth()->user()->name }}
                <span class="u-sidebar--account__holder-text">{{ auth()->user()->email }}</span>
              </div>

              <!-- Settings -->
              <!-- <div class="btn-group position-relative ml-auto mb-auto">
                <a id="sidebar-account-settings-invoker" class="btn btn-xs btn-icon btn-text-secondary rounded" href="javascript:;" role="button" aria-controls="sidebar-account-settings" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" data-unfold-event="click" data-unfold-target="#sidebar-account-settings" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300" data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                  <span class="fas fa-ellipsis-v btn-icon__inner"></span>
                </a>

                <div id="sidebar-account-settings" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="sidebar-account-settings-invoker">
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#">History</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Sign Out</a>
                </div>
              </div> -->
              <!-- End Settings -->
            </header>
            <!-- End Holder Info -->

            <div class="u-sidebar__content--account">
              <!-- List Links -->
            @has_role('admin,superadmin')
            @foreach($laravelAdminMenus->menus as $section)
            @if($section->items)
              <ul class="list-unstyled u-sidebar--account__list">
                @foreach($section->items as $menu)
                    <li class="u-sidebar--account__list-item">
                    <a class="u-sidebar--account__list-link" href="{{ url($menu->url) }}">
                        <!-- <span class="fas fa-home u-sidebar--account__list-icon mr-2"></span> -->
                        {{ $menu->title }}
                    </a>
                    </li>
                @endforeach
                <!-- <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="dashboard.html">
                    <span class="fas fa-home u-sidebar--account__list-icon mr-2"></span>
                    Dashboard
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="profile.html">
                    <span class="fas fa-user-circle u-sidebar--account__list-icon mr-2"></span>
                    Profile
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="my-tasks.html">
                    <span class="fas fa-tasks u-sidebar--account__list-icon mr-2"></span>
                    My tasks
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="projects.html">
                    <span class="fas fa-layer-group u-sidebar--account__list-icon mr-2"></span>
                    Projects <span class="badge badge-danger float-right mt-1">3</span>
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="members.html">
                    <span class="fas fa-users u-sidebar--account__list-icon mr-2"></span>
                    Members
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="activity.html">
                    <span class="fas fa-exchange-alt u-sidebar--account__list-icon mr-2"></span>
                    Activity
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="payment-methods.html">
                    <span class="fas fa-wallet u-sidebar--account__list-icon mr-2"></span>
                    Payment methods
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="plans.html">
                    <span class="fas fa-cubes u-sidebar--account__list-icon mr-2"></span>
                    Plans
                  </a>
                </li>-->
              </ul>
              @endif
              <div class="u-sidebar--account__list-divider"></div>
              @endforeach
              @endhas_role
              <!-- End List Links -->

              <!-- <div class="u-sidebar--account__list-divider"></div> -->

              <!-- List Links -->
              <!-- <ul class="list-unstyled u-sidebar--account__list">
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="invite-friends.html">
                    <span class="fas fa-user-plus u-sidebar--account__list-icon mr-2"></span>
                    Invite friends
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="api-token.html">
                    <span class="fas fa-key u-sidebar--account__list-icon mr-2"></span>
                    API Token
                  </a>
                </li>
              </ul> -->
              <!-- End List Links -->
            </div>
          </div>
        </div>

        <!-- Footer -->
        <footer id="SVGwaveWithDots" class="svg-preloader u-sidebar__footer u-sidebar__footer--account">
          <ul class="list-inline mb-0">
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="..\pages\privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="..\pages\terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar__footer--account__text" href="..\pages\help.html">
                <i class="fas fa-info-circle"></i>
              </a>
            </li>
          </ul>

          <!-- SVG Background Shape -->
          <div class="position-absolute right-0 bottom-0 left-0">
            <img class="js-svg-injector" src="{{ asset('default') }}/assets/svg\components\wave-bottom-with-dots.svg" alt="Image Description" data-parent="#SVGwaveWithDots">
          </div>
          <!-- End SVG Background Shape -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Account Sidebar Navigation -->
