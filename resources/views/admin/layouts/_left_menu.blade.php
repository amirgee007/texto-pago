<!--------------------
   START - Mobile Menu
   -------------------->
<div class="menu-mobile menu-activated-on-click color-scheme-dark">

    <div class="mm-logo-buttons-w">
        <a class="mm-logo" href="#">
            <img alt="" src="assets/img/logo-new.jpg">
        </a>
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
                <div class="logged-user-name">Hello {{ Auth::user()->first_name }}</div>
                <div class="logged-user-role">{{ Auth::user()->user_name }}</div>
            </div>
        </div>

        <!--------------------
           START - Mobile Menu List
           -------------------->
        <ul class="main-menu">

            <li class="has-sub-menu" >
                <a href="{{route('index.dashboard')}}">
                    <div class="icon-w">
                        <div class="os-icon os-icon-window-content"></div>
                    </div>
                    <span>Send</span>
                </a>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-hierarchy-structure-2"></div>
                    </div>
                    <span>Withdraw</span>
                </a>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-delivery-box-2"></div>
                    </div>
                    <span>Historical</span>
                </a>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-user-male-circle"></div>
                    </div>
                    <span>My account</span>
                </a>

            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-newspaper"></div>
                    </div>
                    <span>Banks</span>
                </a>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-pencil-12"></div>
                    </div>
                    <span>Change Phone</span>
                </a>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-tasks-checked"></div>
                    </div>
                    <span>Help</span>
                </a>
            </li>
        </ul>

        <!--------------------
         END - Mobile Menu List
        -------------------->


    </div>
</div>
    <!--------------------
    END - Mobile Menu
    -------------------->


    <!--------------------
    START - Menu side
    -------------------->
<style>
    .menu-side-w .logo-w img{
        width: 80%;
    }
</style>
<div class="desktop-menu menu-side-w menu-activated-on-click">
    <div class="logo-w">
        <a class="logo" href="#">
            <img alt="" src="assets/img/logo-new.jpg">
        </a>
    </div>
    <div class="menu-and-user">
        <div class="logged-user-w">
            <div class="logged-user-i">
                <div class="avatar-w">
                    <img alt="" src="{{ asset('assets/img/avatar1.jpg') }}">
                </div>
                <div class="logged-user-info-w">
                    <div class="logged-user-name">Hello {{ Auth::user()->first_name }}</div>
                    <div class="logged-user-role">{{ Auth::user()->user_name }}</div>
                </div>
                <div class="logged-user-menu">
                    <div class="logged-user-avatar-info">
                        <div class="avatar-w">
                            <img alt="" src="{{ asset('assets/img/avatar1.jpg') }}">

                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">Hello {{ Auth::user()->first_name }}</div>
                            <div class="logged-user-role">{{ Auth::user()->user_name }}</div>
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
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-window-content"></div>
                    </div>
                    <span>Send</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('index.dashboard')}}">Send</a> </li>
                </ul>
            </li>

            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-hierarchy-structure-2"></div>
                    </div>
                    <span>Withdraw</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('get.withdraw')}}">Withdraw</a> </li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-delivery-box-2"></div>
                    </div>
                    <span>Historical</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('get.historical')}}">Historical</a> </li>
                </ul>
            </li>
            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-user-male-circle"></div>
                    </div>
                    <span>My account</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('get.historical')}}">My account</a> </li>
                </ul>

            </li>

            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-newspaper"></div>
                    </div>
                    <span>Banks</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('get.banks')}}">Banks</a> </li>
                </ul>
            </li>

            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-pencil-12"></div>
                    </div>
                    <span>Change Phone</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('get.update.phone')}}">Change Phone</a> </li>
                </ul>
            </li>

            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-pencil-12"></div>
                    </div>
                    <span>Change Pin</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('get.update.pin')}}">Change Pin</a> </li>
                </ul>
            </li>

            <li class="has-sub-menu">
                <a href="#">
                    <div class="icon-w">
                        <div class="os-icon os-icon-tasks-checked"></div>
                    </div>
                    <span>Help</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="javascript:void(0)">Help</a> </li>
                </ul>
            </li>

        </ul>
        <div class="side-menu-magic">
            <span style="color: white; font-size: large">TEXTO PAGO, C.A.</span>
            <p>RIF J1234567890</p>
            <div class="btn-w">
                <a class="btn btn-white btn-rounded" href="#" target="_blank">Visit Site</a>
            </div>
        </div>
    </div>
</div>
<!--------------------
   END - Menu side
   -------------------->