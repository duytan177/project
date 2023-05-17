<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img width="110" class="img-fluid for-light"
                                                            src="public/assets/logo/logo4.png" width="97" alt=""><img
                    class="img-fluid for-dark" src="public/assets/images/logo/logo_dark.png"
                    alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                                           data-feather="grid"> </i>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                                                                 src="public/assets/logo/logo_.png" width="30" alt=""></a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i
                                class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>

                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">General</h6>
                            <p class="lan-2">Dashboards for Doctor.</p>
                        </div>
                    </li>
                    @if(\Illuminate\Support\Facades\Auth::user()->role == 1)
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                                    href="{{route('invoice2')}}" ><i
                                    data-feather="home"></i><span>Invoices</span></a></li>
                        {{--                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i--}}
                        {{--                        data-feather="anchor"></i><span>Starter kit</span></a>--}}
                        {{--                    <ul class="sidebar-submenu">--}}
                        {{--                        <li><a class="submenu-title" href="#">color version<span class="sub-arrow"><i--}}
                        {{--                                class="fa fa-chevron-right"></i></span></a>--}}
                        {{--                            <ul class="nav-sub-childmenu submenu-content">--}}
                        {{--                                <li><a href="index.html">Layout Light</a></li>--}}
                        {{--                                <li><a href="layout-dark.html">Layout Dark</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}
                        {{--                        <li><a class="submenu-title" href="#">Page layout<span class="sub-arrow"><i--}}
                        {{--                                class="fa fa-chevron-right"></i></span></a>--}}
                        {{--                            <ul class="nav-sub-childmenu submenu-content">--}}
                        {{--                                <li><a href="boxed.html">Boxed</a></li>--}}
                        {{--                                <li><a href="layout-rtl.html">RTL</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}
                        {{--                        <li><a href="hide-on-scroll.html"><span>Hide menu on Scroll</span></a></li>--}}
                        {{--                        <li><a class="submenu-title" href="#">Footers<span class="sub-arrow"><i--}}
                        {{--                                class="fa fa-chevron-right"></i></span></a>--}}
                        {{--                            <ul class="nav-sub-childmenu submenu-content">--}}
                        {{--                                <li><a href="footer-light.html">Footer Light</a></li>--}}
                        {{--                                <li><a href="footer-dark.html">Footer Dark</a></li>--}}
                        {{--                                <li><a href="footer-fixed.html">Footer Fixed</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}
                        {{--                    </ul>--}}
                        {{--                </li>--}}

                        <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                                    href="http://support.pixelstrap.com/help-center" target="_blank"><i
                                    data-feather="headphones"></i><span>Consulter</span></a>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                    data-feather="file-text"></i><span>Facture </span></a>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                    data-feather="file-text"></i><span>Profil </span></a>
                        </li>
                    @else
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                                    href="{{route('profile')}}" ><i
                                    data-feather="home"></i><span>Profile</span></a></li>
                        {{--                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i--}}
                        {{--                        data-feather="anchor"></i><span>Starter kit</span></a>--}}
                        {{--                    <ul class="sidebar-submenu">--}}
                        {{--                        <li><a class="submenu-title" href="#">color version<span class="sub-arrow"><i--}}
                        {{--                                class="fa fa-chevron-right"></i></span></a>--}}
                        {{--                            <ul class="nav-sub-childmenu submenu-content">--}}
                        {{--                                <li><a href="index.html">Layout Light</a></li>--}}
                        {{--                                <li><a href="layout-dark.html">Layout Dark</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}
                        {{--                        <li><a class="submenu-title" href="#">Page layout<span class="sub-arrow"><i--}}
                        {{--                                class="fa fa-chevron-right"></i></span></a>--}}
                        {{--                            <ul class="nav-sub-childmenu submenu-content">--}}
                        {{--                                <li><a href="boxed.html">Boxed</a></li>--}}
                        {{--                                <li><a href="layout-rtl.html">RTL</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}
                        {{--                        <li><a href="hide-on-scroll.html"><span>Hide menu on Scroll</span></a></li>--}}
                        {{--                        <li><a class="submenu-title" href="#">Footers<span class="sub-arrow"><i--}}
                        {{--                                class="fa fa-chevron-right"></i></span></a>--}}
                        {{--                            <ul class="nav-sub-childmenu submenu-content">--}}
                        {{--                                <li><a href="footer-light.html">Footer Light</a></li>--}}
                        {{--                                <li><a href="footer-dark.html">Footer Dark</a></li>--}}
                        {{--                                <li><a href="footer-fixed.html">Footer Fixed</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </li>--}}
                        {{--                    </ul>--}}
                        {{--                </li>--}}

                        <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                                    href="{{route('invoice.index')}}" target="_blank"><i
                                    data-feather="headphones"></i><span>Invoice</span></a>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                    data-feather="file-text"></i><span>Facture </span></a>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                    data-feather="file-text"></i><span>Profil </span></a>
                        </li>
                    @endif

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>

