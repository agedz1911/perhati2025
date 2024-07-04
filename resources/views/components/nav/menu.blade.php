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
                <a href="/"  class="nav-link-item">Home</a>
              </li>
              <li class="nav-item nav-item-has-children {{ request()->is('congress-information*') ? 'text-perhati-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger ">Congress Information <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-1">
                  <li class="sub-menu--item">
                    <a href="/congress-information#welcome-remarks">Welcome Remarks</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/congress-information#organizing-committee">Organizing Committee</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/congress-information#faculties">Faculties</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item nav-item-has-children {{ request()->is('scientific-program*') ? 'text-perhati-500' : '' }}">
                <a href="javascript:void(0)"  class="nav-link-item drop-trigger">Scientific Program
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-2">
                  <li class="sub-menu--item">
                    <a href="/scientific-program#at-glance">Program at Glance</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/scientific-program#schedule">Scientific Schedule</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item {{ request()->is('registration*') ? 'text-perhati-500' : '' }}">
                <a href="/registration"  class="nav-link-item">Registration
                  <i class="fa-solid fa-angle-down"></i>
                </a>
              </li>
              <li class="nav-item nav-item-has-children {{ request()->is('submission*') ? 'text-perhati-500' : '' }}">
                <a href="javascript:void(0)" class="nav-link-item drop-trigger">Submission
                  <i class="fa-solid fa-angle-down"></i>
                </a>
                <ul class="sub-menu" id="submenu-11">
                  <li class="sub-menu--item">
                    <a href="/submission#guideline-abstract">Guideline for Abstract</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="/submission#submission">Abstract Submission</a>
                  </li>
                </ul>
              </li>
              
              
            </ul>
          </nav>
        </div>
        <!-- Header Navigation -->

        <!-- Header User Event -->
        <div class="flex items-center gap-1">
          <a href="https://www.instagram.com/wecoc_ykvi/?igsh=MXYzeHQxYThlbDFqcQ%3D%3D" class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-instagram text-rose-500 "></i></a>
          <a class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-facebook text-sky-500 "></i></a>
          <a class="btn btn-ghost btn-sm hidden sm:inline-block py-2 btn-circle"><i class="fa-brands fa-square-x-twitter "></i></a>
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