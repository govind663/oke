<header>
    <section class="main_menu" id="myHeader">
        <div class="container">
            <div class="row v-center">
                <div class="header-item item-left">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/home/logo.png') }}"></a>
                    </div>
                </div>
                <div class="header-item item-center">
                    <div class="menu-overlay"></div>
                    <nav class="menu">
                        <div class="mobile-menu-head">
                            <div class="go-back"><i class="fa fa-angle-left"></i></div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">×</div>
                        </div>
                        <ul class="menu-main">
                            <li class="menu-item-has-children">
                                <a href="#">Business <i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu single-column-menu">
                                    <ul>
                                        <li><a href="{{ route('arvos') }}">Arvos</a></li>
                                        <li><a href="{{ route('rsb') }}">RSB</a></li>
                                        <li><a href="{{ route('comming-soon') }}">Catalyst</a></li>
                                        <li><a href="{{ route('comming-soon') }}">Battery</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{ route('about') }}">About OKE</a></li>
                            <!-- <li><a href="{{ route('comming-soon') }}">Events & Exhibitions</a></li>
                            <li><a href="{{ route('comming-soon') }}">Blogs</a></li>
                            <li><a href="{{ route('comming-soon') }}">Careers</a></li> -->
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-item header-right-item item-right">
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
