<div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class=" dropdown">
                  <a href="@if(App()->getLocale() == 'en'){{ LaravelLocalization::getLocalizedURL('ar') }} @else {{ LaravelLocalization::getLocalizedURL('en') }}@endif " type="button" class="btn btn-submit font-weight-bold">
                    @if(App()->getLocale() == 'en') Arabic</i> @else English</i>@endif
                  </a>
              </li>
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    Admin
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      
                    <a class="dropdown-item"  href="{{route('admin.logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>