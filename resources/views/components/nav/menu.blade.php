<div class="top-0 z-50 sticky bg-slate-200">
  <header class="site-header py-2 px-3" id="sticky-menu">
    <div class="container-default">
      <div class="flex items-center justify-between gap-x-8">
        <!-- Header Logo -->
        <div class="avatar">
          <a href="/" class="h-14">
            <img src="images/logo/logo-dark.png" alt="PERHATI" />
          </a>
        </div>
        <!-- Header Logo -->

        <!-- Header Navigation -->
        <div class="menu-block-wrapper">
          <div class="menu-overlay"></div>
          <nav class="menu-block" id="append-menu-header">
            <div class="mobile-menu-head">
              <div class="go-back">
                <i class="fa-solid fa-angle-left"></i>
              </div>
              <div class="current-menu-title"></div>
              <div class="mobile-menu-close">&times;</div>
            </div>
            <ul class="site-menu-main">
              <li class="nav-item {{ request()->is('/') ? 'text-perhati-500' : '' }}">
                <a href="/" class="nav-link-item">{{__('menu.home')}}</a>
              </li>
              <li
                class="nav-item nav-item-has-children {{ request()->is('congress-information*') ? 'text-perhati-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger ">{{__('menu.congress-info')}} <i
                    class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-1">
                  <li class="sub-menu--item">
                    <a href="/congress-information#welcome-remarks">{{__('menu.remarks')}}</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/congress-information#organizing-committee">{{__('menu.committee')}}</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/congress-information#faculties">{{__('menu.faculty')}}</a>
                  </li>
                </ul>
              </li>

              <li
                class="nav-item nav-item-has-children {{ request()->is('scientific-program*') ? 'text-perhati-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger">{{__('menu.program')}}
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-2">
                  <li class="sub-menu--item">
                    <a href="/scientific-program#at-glance">{{__('menu.atglance')}}</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/scientific-program#schedule">{{__('menu.schedule')}}</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item {{ request()->is('registration*') ? 'text-perhati-500' : '' }}">
                <a href="/registration" class="nav-link-item">{{__('menu.registration')}}
                  <i class="fa-solid fa-angle-down"></i>
                </a>
              </li>
              <li class="nav-item nav-item-has-children {{ request()->is('submission*') ? 'text-perhati-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger">{{__('menu.submission')}}
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-11">
                  <li class="sub-menu--item">
                    <a href="/submission#guideline-abstract">{{__('menu.guide-abstract')}}</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/submission#submission">{{__('menu.abstract')}}</a>
                  </li>
                </ul>
              </li>


            </ul>
          </nav>
        </div>
        <!-- Header Navigation -->

        <!-- Header User Event -->
        <div class="flex items-center gap-1">
          <div class="dropdown dropdown-hover dropdown-end">
            <div tabindex="0" role="button" class="btn m-1">Hover</div>
            <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
              <li><a>Item 1</a></li>
              <li><a>Item 2</a></li>
            </ul>
          </div>
          <!-- <a class="btn btn-perhati-500 md:hidden sm:inline-block py-4">Login</a> -->
          <!-- Responsive Offcanvas Menu Button -->
          <div class="block lg:hidden">
            <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
              <span></span>
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
        <!-- Header User Event -->
      </div>
    </div>
  </header>
</div>