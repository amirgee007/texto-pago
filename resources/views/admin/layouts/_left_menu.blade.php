<!--------------------
   START - Mobile Menu
   -------------------->
<div class="menu-mobile menu-activated-on-click color-scheme-dark">

    <div class="mm-logo-buttons-w">
        <a class="mm-logo" href="#">
            <img alt="" src="{{ asset('assets/img/logo.png') }}">
            <span>Clean Admin</span></a>
        <div class="mm-buttons">
            <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
            </div>
        </div>
    </div>


    <div class="menu-and-user">
        <div class="logged-user-w">
            <div class="avatar-w">
                <img alt="" src="{{ asset('assets/img/avatar1.jpg') }}">
            </div>
            <div class="logged-user-info-w">
                <div class="logged-user-name">Maria Gomez</div>
                <div class="logged-user-role">Administrator</div>
            </div>
        </div>
        <!--------------------
           START - Mobile Menu List
           -------------------->
        <ul class="main-menu">
            <li class="has-sub-menu">
                <a href="index.html">
                    <div class="icon-w">
                        <div class="os-icon os-icon-window-content"></div>
                    </div>
                    <span>Dashboard</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Dashboard 1</a></li>
                </ul>
            </li>


            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-hierarchy-structure-2"></div>
                    </div>
                    <span>Menu Styles</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Side Menu Light</a></li>
                </ul>
            </li>

            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-delivery-box-2"></div>
                    </div>
                    <span>Applications</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Email Application</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-newspaper"></div>
                    </div>
                    <span>Pages</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Invoice</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-pencil-12"></div>
                    </div>
                    <span>UI Kit</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Grid</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-email-2-at2"></div>
                    </div>
                    <span>Emails</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Welcome Email</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-user-male-circle"></div>
                    </div>
                    <span>Users</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Big Profile</a></li>
                    <li><a href="#">Compact Profile</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-tasks-checked"></div>
                    </div>
                    <span>Forms</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Regular Forms</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-grid-squares"></div>
                    </div>
                    <span>Tables</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Regular Tables</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-robot-1"></div>
                    </div>
                    <span>Icons</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">Simple Line Icons</a></li>
                </ul>
            </li>
        </ul>
        <!--------------------
           END - Mobile Menu List
           -------------------->
    </div>
</div>
<!--------------------
   END - Mobile Menu
   --------------------><!--------------------
               START - Menu side
               -------------------->
<div class="desktop-menu menu-side-w menu-activated-on-click">
    <div class="logo-w">
        <a class="logo" href="index.html">
            <div class="logo-element"></div>
            <div class="logo-label">Clean Admin</div>
        </a>
    </div>
    <div class="menu-and-user">
        <div class="logged-user-w">
            <div class="logged-user-i">
                <div class="avatar-w">
                    <img alt="" src="{{ asset('assets/img/avatar1.jpg') }}">
                </div>
                <div class="logged-user-info-w">
                    <div class="logged-user-name">Maria Gomez</div>
                    <div class="logged-user-role">Administrator</div>
                </div>
                <div class="logged-user-menu">
                    <div class="logged-user-avatar-info">
                        <div class="avatar-w">
                            <img alt="" src="{{ asset('assets/img/avatar1.jpg') }}">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">Maria Gomez</div>
                            <div class="logged-user-role">Administrator</div>
                        </div>
                    </div>
                    <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                    <ul>
                       <li><a href="{{route('logout')}}"><i class="os-icon os-icon-signs-11"></i><span>Click to Logout</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="main-menu">
            <li class="has-sub-menu">
                <a href="index.html">
                    <div class="icon-w">
                        <div class="os-icon os-icon-window-content"></div>
                    </div>
                    <span>Dashboard</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="index.html">Dashboard 1</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-hierarchy-structure-2"></div>
                    </div>
                    <span>Menu Styles</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="layouts_menu_side.html">Side Menu Light</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-delivery-box-2"></div>
                    </div>
                    <span>Applications</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="apps_email.html">Email Application</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-newspaper"></div>
                    </div>
                    <span>Pages</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="misc_invoice.html">Invoice</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-pencil-12"></div>
                    </div>
                    <span>UI Kit</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="uikit_alerts.html">Alerts</a></li>

                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-email-2-at2"></div>
                    </div>
                    <span>Emails</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="emails_welcome.html">Welcome Email</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-user-male-circle"></div>
                    </div>
                    <span>Users</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="users_profile_big.html">Big Profile</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-tasks-checked"></div>
                    </div>
                    <span>Forms</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="forms_regular.html">Regular Forms</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-grid-squares"></div>
                    </div>
                    <span>Tables</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="tables_regular.html">Regular Tables</a></li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-robot-1"></div>
                    </div>
                    <span>Icons</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--------------------
   END - Menu side
   -------------------->