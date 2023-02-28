          <!-- Left Sidebar  -->
          <div class="left-menu ">
              <div class="menubar-content">
                  <nav class="animated bounceInDown">
                      <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" id="sidebar">
                          <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                              <a href="{{ route('dashboard') }}"><i class="bi fs-5 pe-2 bi-graph-up-arrow"></i><span
                                      class="hide-menu ">{{ __('en.Dashboard') }}</span></a>
                          </li>

                          <li class="{{ request()->is('manageUser/*') ? 'active' : '' }} collapsed"
                              data-bs-toggle="collapse" data-bs-target="#ManageUser" aria-expanded="true">
                              <a href="#"><i class="bi fs-5 pe-2 bi-person-square"></i><span>{{ __('en.Manage Users') }}</span>
                                  <i class="bi bi-caret-down-fill right"></i></a>
                          </li>
                          <ul class="submenu collapse {{ request()->is('manageUser/*') ? 'show' : '' }}" id="ManageUser">

                              <li class="{{ request()->route()->getName() == 'group'? 'active': '' }}">
                                  <a href="{{ route('group') }}"><i class="bi fs-5 pe-2 bi-bounding-box"></i><span
                                          class="hide-menu">{{ __('en.Groups') }}
                                      </span></a>
                              </li>
                              <li class="{{ request()->route()->getName() == 'module'? 'active': '' }}">
                                  <a href="{{ route('module') }}"><i class="bi fs-5 pe-2 bi-ui-checks-grid"></i><span
                                          class="hide-menu">{{ __('en.Modules') }}</span></a>
                              </li>
                              <li class="{{ request()->route()->getName() == 'user'? 'active': '' }}">
                                <a href="{{ route('user') }}"><i class="bi fs-5 pe-2 bi-people-fill"></i><span
                                        class="hide-menu">{{ __('en.Users') }}</span></a>
                              </li>
                              <li class="{{ request()->route()->getName() == 'setting'? 'active': '' }}">
                                <a href="{{ route('setting') }}"><i class="bi fs-5 pe-2 bi-gear"></i><span
                                        class="hide-menu">{{ __('en.Settings') }}</span></a>
                              </li>
                          </ul>
                      </ul>
                  </nav>
              </div>
          </div>
          <!-- End Left Sidebar  -->

          <div class="content-wrapper">
              <div class="min-height-css">
