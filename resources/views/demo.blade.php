<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="public/assets/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="public/assets/favicon/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="public/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="public/assets/favicon/site.webmanifest">
    <title>SOS Requisision</title>
    <!-- Google font-->
 
   @include('library.thuvien')
</head>
<body>
<!-- loader starts-->
<div class="loader-wrapper">
    <div class="loader-index"><span></span></div>
    <svg>
        <defs></defs>
        <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"></fecolormatrix>
        </filter>
    </svg>
</div>
<!-- loader ends-->
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        <div class="header-wrapper row m-0">
            <form class="form-inline search-full col" action="#" method="get">
                <div class="form-group w-100">
                    <div class="Typeahead Typeahead--twitterUsers">
                        <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                   placeholder="Search Cuba .." name="q" title="" autofocus>
                            <div class="spinner-border Typeahead-spinner" role="status"><span
                                    class="sr-only">Loading...</span></div>
                            <i class="close-search" data-feather="x"></i>
                        </div>
                        <div class="Typeahead-menu"></div>
                    </div>
                </div>
            </form>
            <div class="header-logo-wrapper col-auto p-0">
                <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="public/assets/logo/logo4.png"
                                                                    alt=""></a></div>
                <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                                               data-feather="align-center"></i></div>
            </div>

            <div class="left-header col horizontal-wrapper ps-0">
                <!--    <ul class="horizontal-menu">
                        <li class="mega-menu outside"><a class="nav-link" href="#!"><i data-feather="layers"></i><span>Bonus Ui</span></a>
                            <div class="mega-menu-container nav-submenu menu-to-be-close header-mega">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col mega-box">
                                            <div class="mobile-title d-none">
                                                <h5>Mega menu</h5><i data-feather="x"></i>
                                            </div>
                                            <div class="link-section icon">
                                                <div>
                                                    <h6>Error Page</h6>
                                                </div>
                                                <ul>
                                                    <li><a href="theme/error-400.html">Error page 400</a></li>
                                                    <li><a href="theme/error-401.html">Error page 401</a></li>
                                                    <li><a href="theme/error-403.html">Error page 403</a></li>
                                                    <li><a href="theme/error-404.html">Error page 404</a></li>
                                                    <li><a href="theme/error-500.html">Error page 500</a></li>
                                                    <li><a href="theme/error-503.html">Error page 503</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col mega-box">
                                            <div class="link-section doted">
                                                <div>
                                                    <h6> Authentication</h6>
                                                </div>
                                                <ul>
                                                    <li><a href="theme/login.html">Login</a></li>
                                                    <li><a href="theme/login_one.html">Login with image</a></li>
                                                    <li><a href="theme/login-bs-validation.html">Login with validation</a>
                                                    </li>
                                                    <li><a href="theme/sign-up.html">Sign Up</a></li>
                                                    <li><a href="theme/sign-up-one.html">SignUp with image</a></li>
                                                    <li><a href="theme/sign-up-two.html">SignUp with image</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col mega-box">
                                            <div class="link-section dashed-links">
                                                <div>
                                                    <h6>Usefull Pages</h6>
                                                </div>
                                                <ul>
                                                    <li><a href="theme/search.html">Search Website</a></li>
                                                    <li><a href="theme/unlock.html">Unlock User</a></li>
                                                    <li><a href="theme/forget-password.html">Forget Password</a></li>
                                                    <li><a href="theme/reset-password.html">Reset Password</a></li>
                                                    <li><a href="theme/maintenance.html">Maintenance</a></li>
                                                    <li><a href="theme/login-sa-validation.html">Login validation</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col mega-box">
                                            <div class="link-section">
                                                <div>
                                                    <h6>Email templates</h6>
                                                </div>
                                                <ul>
                                                    <li class="ps-0"><a href="theme/basic-template.html">Basic Email</a>
                                                    </li>
                                                    <li class="ps-0"><a href="theme/email-header.html">Basic With Header</a>
                                                    </li>
                                                    <li class="ps-0"><a href="theme/template-email.html">Ecomerce
                                                        Template</a></li>
                                                    <li class="ps-0"><a href="theme/template-email-2.html">Email Template
                                                        2</a></li>
                                                    <li class="ps-0"><a href="theme/ecommerce-templates.html">Ecommerce
                                                        Email</a></li>
                                                    <li class="ps-0"><a href="theme/email-order-success.html">Order
                                                        Success</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col mega-box">
                                            <div class="link-section">
                                                <div>
                                                    <h6>Coming Soon</h6>
                                                </div>
                                                <ul class="svg-icon">
                                                    <li><a href="theme/comingsoon.html"> <i data-feather="file"> </i>Coming-soon</a>
                                                    </li>
                                                    <li><a href="theme/comingsoon-bg-video.html"> <i
                                                            data-feather="film"> </i>Coming-video</a></li>
                                                    <li><a href="theme/comingsoon-bg-img.html"><i data-feather="image"> </i>Coming-Image</a>
                                                    </li>
                                                </ul>
                                                <div>
                                                    <h6>Other Soon</h6>
                                                </div>
                                                <ul class="svg-icon">
                                                    <li><a class="txt-primary" href="theme/landing-page.html"> <i
                                                            data-feather="cast"></i>Landing Page</a></li>
                                                    <li><a class="txt-secondary" href="theme/sample-page.html"> <i
                                                            data-feather="airplay"></i>Sample Page</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="level-menu outside"><a class="nav-link" href="#!"><i data-feather="inbox"></i><span>Level Menu</span></a>
                            <ul class="header-level-menu menu-to-be-close">
                                <li><a href="theme/file-manager.html" data-original-title="" title=""> <i
                                        data-feather="git-pull-request"></i><span>File manager    </span></a></li>
                                <li><a href="#!" data-original-title="" title=""> <i
                                        data-feather="users"></i><span>Users</span></a>
                                    <ul class="header-level-sub-menu">
                                        <li><a href="theme/user-profile.html" data-original-title="" title=""> <i
                                                data-feather="user"></i><span>User Profile</span></a></li>
                                        <li><a href="theme/edit-profile.html" data-original-title="" title=""> <i
                                                data-feather="user-minus"></i><span>User Edit</span></a></li>
                                        <li><a href="theme/user-cards.html" data-original-title="" title=""> <i
                                                data-feather="user-check"></i><span>Users Cards</span></a></li>
                                    </ul>
                                </li>
                                <li><a href="theme/kanban.html" data-original-title="" title=""> <i
                                        data-feather="airplay"></i><span>Kanban Board</span></a></li>
                                <li><a href="theme/bookmark.html" data-original-title="" title=""> <i
                                        data-feather="heart"></i><span>Bookmark</span></a></li>
                                <li><a href="theme/social-app.html" data-original-title="" title=""> <i
                                        data-feather="zap"></i><span>Social App                     </span></a></li>
                            </ul>
                        </li>
                    </ul>
                    -->
            </div>

            <div class="nav-right col-8 pull-right right-header p-0">
                <ul class="nav-menus">
                    <!--
                    <li class="language-nav">
                        <div class="translate_wrapper">

                            <div class="current_lang">
                                <div class="lang"><i class="flag-icon flag-icon-us"></i><span
                                        class="lang-txt">EN                               </span></div>
                            </div>
                            <div class="more_lang">
                                <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span
                                        class="lang-txt">English<span> (US)</span></span></div>
                                <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span
                                        class="lang-txt">Deutsch</span></div>
                                <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span
                                        class="lang-txt">Español</span></div>
                                <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span
                                        class="lang-txt">Français</span></div>
                                <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span
                                        class="lang-txt">Português<span> (BR)</span></span></div>
                                <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span
                                        class="lang-txt">简体中文</span></div>
                                <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span
                                        class="lang-txt">لعربية <span> (ae)</span></span></div>
                            </div>

                        </div>
                    </li>                            -->
                    <!--<li><span class="header-search"><i data-feather="search"></i></span></li>
                    <li class="onhover-dropdown">
                        <div class="notification-box"><i data-feather="bell"> </i><span
                                class="badge rounded-pill badge-secondary">4                                </span>
                        </div>
                        <ul class="notification-dropdown onhover-show-div">
                            <li><i data-feather="bell"></i>
                                <h6 class="f-18 mb-0">Notitications</h6>
                            </li>
                            <li>
                                <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span
                                        class="pull-right">10 min.</span></p>
                            </li>
                            <li>
                                <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span
                                        class="pull-right">1 hr</span></p>
                            </li>
                            <li>
                                <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span
                                        class="pull-right">3 hr</span></p>
                            </li>
                            <li>
                                <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span
                                        class="pull-right">6 hr</span></p>
                            </li>
                            <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                        </ul>
                    </li>

                    <li class="onhover-dropdown">
                        <div class="notification-box"><i data-feather="star"></i></div>
                        <div class="onhover-show-div bookmark-flip">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="front">
                                        <ul class="droplet-dropdown bookmark-dropdown">
                                            <li class="gradient-primary"><i data-feather="star"></i>
                                                <h6 class="f-18 mb-0">Bookmark</h6>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-4 text-center"><i data-feather="file-text"></i>
                                                    </div>
                                                    <div class="col-4 text-center"><i data-feather="activity"></i></div>
                                                    <div class="col-4 text-center"><i data-feather="users"></i></div>
                                                    <div class="col-4 text-center"><i data-feather="clipboard"></i>
                                                    </div>
                                                    <div class="col-4 text-center"><i data-feather="anchor"></i></div>
                                                    <div class="col-4 text-center"><i data-feather="settings"></i></div>
                                                </div>
                                            </li>
                                            <li class="text-center">
                                                <button class="flip-btn" id="flip-btn">Add New Bookmark</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="back">
                                        <ul>
                                            <li>
                                                <div class="droplet-dropdown bookmark-dropdown flip-back-content">
                                                    <input type="text" placeholder="search...">
                                                </div>
                                            </li>
                                            <li>
                                                <button class="d-block flip-back" id="flip-back">Back</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="mode"><i class="fa fa-moon-o"></i></div>
                    </li>
                    <li class="cart-nav onhover-dropdown">
                        <div class="cart-box"><i data-feather="shopping-cart"></i><span
                                class="badge rounded-pill badge-primary">2</span></div>
                        <ul class="cart-dropdown onhover-show-div">
                            <li>
                                <h6 class="mb-0 f-20">Shoping Bag</h6><i data-feather="shopping-cart"></i>
                            </li>
                            <li class="mt-0">
                                <div class="media"><img class="img-fluid rounded-circle me-3 img-60"
                                                        src="public/assets/images/ecommerce/01.jpg" alt="">
                                    <div class="media-body"><span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                                        <p>Yellow(#fcb102)</p>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend">
                              <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i
                                      data-feather="minus"></i></button></span>
                                                <input class="form-control input-number" type="text" name="quantity"
                                                       value="1"><span class="input-group-prepend">
                              <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i
                                      data-feather="plus"></i></button></span>
                                            </div>
                                        </div>
                                        <h6 class="text-end text-muted">$299.00</h6>
                                    </div>
                                    <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                                </div>
                            </li>
                            <li class="mt-0">
                                <div class="media"><img class="img-fluid rounded-circle me-3 img-60"
                                                        src="public/assets/images/ecommerce/03.jpg" alt="">
                                    <div class="media-body"><span>V-Neck Shawl Collar Woman's Solid T-Shirt</span>
                                        <p>Yellow(#fcb102)</p>
                                        <div class="qty-box">
                                            <div class="input-group"><span class="input-group-prepend">
                              <button class="btn quantity-left-minus" type="button" data-type="minus" data-field=""><i
                                      data-feather="minus"></i></button></span>
                                                <input class="form-control input-number" type="text" name="quantity"
                                                       value="1"><span class="input-group-prepend">
                              <button class="btn quantity-right-plus" type="button" data-type="plus" data-field=""><i
                                      data-feather="plus"></i></button></span>
                                            </div>
                                        </div>
                                        <h6 class="text-end text-muted">$299.00</h6>
                                    </div>
                                    <div class="close-circle"><a href="#"><i data-feather="x"></i></a></div>
                                </div>
                            </li>
                            <li>
                                <div class="total">
                                    <h6 class="mb-2 mt-0 text-muted">Order Total : <span
                                            class="f-right f-20">$598.00</span></h6>
                                </div>
                            </li>
                            <li><a class="btn btn-block w-100 mb-2 btn-primary view-cart" href="cart.html">Go to shoping
                                bag</a><a class="btn btn-block w-100 btn-secondary view-cart" href="checkout.html">Checkout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown"><i data-feather="message-square"></i>
                        <ul class="chat-dropdown onhover-show-div">
                            <li><i data-feather="message-square"></i>
                                <h6 class="f-18 mb-0">Message Box </h6>
                            </li>
                            <li>
                                <div class="media"><img class="img-fluid rounded-circle me-3"
                                                        src="public/assets/images/user/1.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="media-body"><span>Erica Hughes</span>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                    </div>
                                    <p class="f-12 font-success">58 mins ago</p>
                                </div>
                            </li>
                            <li>
                                <div class="media"><img class="img-fluid rounded-circle me-3"
                                                        src="public/assets/images/user/2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="media-body"><span>Kori Thomas</span>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                    </div>
                                    <p class="f-12 font-success">1 hr ago</p>
                                </div>
                            </li>
                            <li>
                                <div class="media"><img class="img-fluid rounded-circle me-3"
                                                        src="public/assets/images/user/14.png" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="media-body"><span>Ain Chavez</span>
                                        <p>Lorem Ipsum is simply dummy...</p>
                                    </div>
                                    <p class="f-12 font-danger">32 mins ago</p>
                                </div>
                            </li>
                            <li class="text-center"><a class="btn btn-primary" href="#">View All </a></li>
                        </ul>
                    </li>
                    -->
                    <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                            data-feather="maximize"></i></a></li>
                    <li class="profile-nav onhover-dropdown p-0 me-0">
                        <div class="media profile-media"><img class="b-r-10" src="public/assets/images/dashboard/profile.jpg"
                                                              alt="">
                            <div class="media-body"><span>Tom Nguyen</span>
                                <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div">
                            <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                            <!-- <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                             <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>-->
                            <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                            <li><a href="#"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <script class="result-template" type="text/x-handlebars-template">
                <div class="ProfileCard u-cf">
                    <div class="ProfileCard-avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-airplay m-0">
                            <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                            <polygon points="12 15 17 21 7 21 12 15"></polygon>
                        </svg>
                    </div>
                    <div class="ProfileCard-details">
                        <div class="ProfileCard-realName">sdsad</div>
                    </div>
                </div>
            </script>
            <script class="empty-template" type="text/x-handlebars-template">
                <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down,
                    yikes!
                </div></script>
        </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
            <div>
                <div class="logo-wrapper"><a href="index.html"><img width="110" class="img-fluid for-light"
                                                                    src="public/assets/logo/logo4.png" width="97" alt=""><img
                        class="img-fluid for-dark" src="public/assets/images/logo/logo_dark.png" alt=""></a>
                    <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
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
                                <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                                                                      aria-hidden="true"></i></div>
                            </li>

                            <li class="sidebar-main-title">
                                <div>
                                    <h6 class="lan-1">General</h6>
                                    <p class="lan-2">Dashboards for Doctor.</p>
                                </div>
                            </li>

                            <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="theme/index.html"
                                                        target="_blank"><i
                                    data-feather="home"></i><span>Saisir</span></a></li>

                            <!--<li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                    data-feather="anchor"></i><span>Starter kit</span></a>
                                <ul class="sidebar-submenu">
                                    <li><a class="submenu-title" href="#">color version<span class="sub-arrow"><i
                                            class="fa fa-chevron-right"></i></span></a>
                                        <ul class="nav-sub-childmenu submenu-content">
                                            <li><a href="index.html">Layout Light</a></li>
                                            <li><a href="layout-dark.html">Layout Dark</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="submenu-title" href="#">Page layout<span class="sub-arrow"><i
                                            class="fa fa-chevron-right"></i></span></a>
                                        <ul class="nav-sub-childmenu submenu-content">
                                            <li><a href="boxed.html">Boxed</a></li>
                                            <li><a href="layout-rtl.html">RTL</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="hide-on-scroll.html"><span>Hide menu on Scroll</span></a></li>
                                    <li><a class="submenu-title" href="#">Footers<span class="sub-arrow"><i
                                            class="fa fa-chevron-right"></i></span></a>
                                        <ul class="nav-sub-childmenu submenu-content">
                                            <li><a href="footer-light.html">Footer Light</a></li>
                                            <li><a href="footer-dark.html">Footer Dark</a></li>
                                            <li><a href="footer-fixed.html">Footer Fixed</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            -->
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                                        href="http://support.pixelstrap.com/help-center"
                                                        target="_blank"><i
                                    data-feather="headphones"></i><span>Consulter</span></a>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                                        href="#"><i
                                    data-feather="file-text"></i><span>Facture                                    </span></a>
                            </li>
                            <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                                        href="#"><i
                                    data-feather="file-text"></i><span>Profil                                    </span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                </nav>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-6">
                            <h3>Dr. Tom Nguyen</h3>
                        </div>
                        <div class="col-6">
                            <!--
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Color version</li>
                                <li class="breadcrumb-item active">Layout light</li>
                            </ol>
                            -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 project-list">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                                        href="#top-home" role="tab" aria-controls="top-home"
                                                        aria-selected="true" data-bs-original-title="" title="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-target">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="6"></circle>
                                        <circle cx="12" cy="12" r="2"></circle>
                                    </svg>
                                    </a></li>
                                <!--     <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false" data-bs-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12" y2="8"></line></svg>Doing</a></li>
                                     <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false" data-bs-original-title="" title=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>Done</a></li>-->
                            </ul>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group mb-0 me-0"></div>

                            <h3 style="text-align: right">Code parriainage: <b>JDOE-4724</b> &nbsp;&nbsp;&nbsp;
                                <a class="btn btn-primary" href="projectcreate.html" data-bs-original-title="" title="">

                                    Copier</a>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Container-fluid starts-->
            <div class="col-12 xl-100 chart_data_left box-col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Dashboard</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa fa-spin fa-cog"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">

                    <div class="card-body p-0">
                        <div class="row m-0 chart-main">
                            <div class="col">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart flot-chart-container"><div class="chartist-tooltip"></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><line x1="13.571428571428571" x2="13.571428571428571" y1="69" y2="58.2" class="ct-bar" ct:value="400" style="stroke-width: 3px"></line><line x1="20.714285714285715" x2="20.714285714285715" y1="69" y2="44.7" class="ct-bar" ct:value="900" style="stroke-width: 3px"></line><line x1="27.857142857142858" x2="27.857142857142858" y1="69" y2="47.4" class="ct-bar" ct:value="800" style="stroke-width: 3px"></line><line x1="35" x2="35" y1="69" y2="42" class="ct-bar" ct:value="1000" style="stroke-width: 3px"></line><line x1="42.14285714285714" x2="42.14285714285714" y1="69" y2="50.1" class="ct-bar" ct:value="700" style="stroke-width: 3px"></line><line x1="49.285714285714285" x2="49.285714285714285" y1="69" y2="36.6" class="ct-bar" ct:value="1200" style="stroke-width: 3px"></line><line x1="56.42857142857143" x2="56.42857142857143" y1="69" y2="60.9" class="ct-bar" ct:value="300" style="stroke-width: 3px"></line></g><g class="ct-series ct-series-b"><line x1="13.571428571428571" x2="13.571428571428571" y1="58.2" y2="31.200000000000003" class="ct-bar" ct:value="1000" style="stroke-width: 3px"></line><line x1="20.714285714285715" x2="20.714285714285715" y1="44.7" y2="31.200000000000003" class="ct-bar" ct:value="500" style="stroke-width: 3px"></line><line x1="27.857142857142858" x2="27.857142857142858" y1="47.4" y2="31.199999999999996" class="ct-bar" ct:value="600" style="stroke-width: 3px"></line><line x1="35" x2="35" y1="42" y2="31.200000000000003" class="ct-bar" ct:value="400" style="stroke-width: 3px"></line><line x1="42.14285714285714" x2="42.14285714285714" y1="50.1" y2="31.200000000000003" class="ct-bar" ct:value="700" style="stroke-width: 3px"></line><line x1="49.285714285714285" x2="49.285714285714285" y1="36.6" y2="31.200000000000003" class="ct-bar" ct:value="200" style="stroke-width: 3px"></line><line x1="56.42857142857143" x2="56.42857142857143" y1="60.9" y2="31.199999999999996" class="ct-bar" ct:value="1100" style="stroke-width: 3px"></line></g></g><g class="ct-labels"></g></svg></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h2>45</h2>
                                            <h6><br/>Réquistions</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart2 flot-chart-container"><div class="chartist-tooltip"></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><line x1="13.571428571428571" x2="13.571428571428571" y1="69" y2="39.3" class="ct-bar" ct:value="1100" style="stroke-width: 3px"></line><line x1="20.714285714285715" x2="20.714285714285715" y1="69" y2="44.7" class="ct-bar" ct:value="900" style="stroke-width: 3px"></line><line x1="27.857142857142858" x2="27.857142857142858" y1="69" y2="52.8" class="ct-bar" ct:value="600" style="stroke-width: 3px"></line><line x1="35" x2="35" y1="69" y2="42" class="ct-bar" ct:value="1000" style="stroke-width: 3px"></line><line x1="42.14285714285714" x2="42.14285714285714" y1="69" y2="50.1" class="ct-bar" ct:value="700" style="stroke-width: 3px"></line><line x1="49.285714285714285" x2="49.285714285714285" y1="69" y2="36.6" class="ct-bar" ct:value="1200" style="stroke-width: 3px"></line><line x1="56.42857142857143" x2="56.42857142857143" y1="69" y2="60.9" class="ct-bar" ct:value="300" style="stroke-width: 3px"></line></g><g class="ct-series ct-series-b"><line x1="13.571428571428571" x2="13.571428571428571" y1="39.3" y2="31.199999999999996" class="ct-bar" ct:value="300" style="stroke-width: 3px"></line><line x1="20.714285714285715" x2="20.714285714285715" y1="44.7" y2="31.200000000000003" class="ct-bar" ct:value="500" style="stroke-width: 3px"></line><line x1="27.857142857142858" x2="27.857142857142858" y1="52.8" y2="31.199999999999996" class="ct-bar" ct:value="800" style="stroke-width: 3px"></line><line x1="35" x2="35" y1="42" y2="31.200000000000003" class="ct-bar" ct:value="400" style="stroke-width: 3px"></line><line x1="42.14285714285714" x2="42.14285714285714" y1="50.1" y2="31.200000000000003" class="ct-bar" ct:value="700" style="stroke-width: 3px"></line><line x1="49.285714285714285" x2="49.285714285714285" y1="36.6" y2="31.200000000000003" class="ct-bar" ct:value="200" style="stroke-width: 3px"></line><line x1="56.42857142857143" x2="56.42857142857143" y1="60.9" y2="31.199999999999996" class="ct-bar" ct:value="1100" style="stroke-width: 3px"></line></g></g><g class="ct-labels"></g></svg></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h2>2.563$</h2><br/><h6>Récupéré</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart2 flot-chart-container"><div class="chartist-tooltip"></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><line x1="13.571428571428571" x2="13.571428571428571" y1="69" y2="39.3" class="ct-bar" ct:value="1100" style="stroke-width: 3px"></line><line x1="20.714285714285715" x2="20.714285714285715" y1="69" y2="44.7" class="ct-bar" ct:value="900" style="stroke-width: 3px"></line><line x1="27.857142857142858" x2="27.857142857142858" y1="69" y2="52.8" class="ct-bar" ct:value="600" style="stroke-width: 3px"></line><line x1="35" x2="35" y1="69" y2="42" class="ct-bar" ct:value="1000" style="stroke-width: 3px"></line><line x1="42.14285714285714" x2="42.14285714285714" y1="69" y2="50.1" class="ct-bar" ct:value="700" style="stroke-width: 3px"></line><line x1="49.285714285714285" x2="49.285714285714285" y1="69" y2="36.6" class="ct-bar" ct:value="1200" style="stroke-width: 3px"></line><line x1="56.42857142857143" x2="56.42857142857143" y1="69" y2="60.9" class="ct-bar" ct:value="300" style="stroke-width: 3px"></line></g><g class="ct-series ct-series-b"><line x1="13.571428571428571" x2="13.571428571428571" y1="39.3" y2="31.199999999999996" class="ct-bar" ct:value="300" style="stroke-width: 3px"></line><line x1="20.714285714285715" x2="20.714285714285715" y1="44.7" y2="31.200000000000003" class="ct-bar" ct:value="500" style="stroke-width: 3px"></line><line x1="27.857142857142858" x2="27.857142857142858" y1="52.8" y2="31.199999999999996" class="ct-bar" ct:value="800" style="stroke-width: 3px"></line><line x1="35" x2="35" y1="42" y2="31.200000000000003" class="ct-bar" ct:value="400" style="stroke-width: 3px"></line><line x1="42.14285714285714" x2="42.14285714285714" y1="50.1" y2="31.200000000000003" class="ct-bar" ct:value="700" style="stroke-width: 3px"></line><line x1="49.285714285714285" x2="49.285714285714285" y1="36.6" y2="31.200000000000003" class="ct-bar" ct:value="200" style="stroke-width: 3px"></line><line x1="56.42857142857143" x2="56.42857142857143" y1="60.9" y2="31.199999999999996" class="ct-bar" ct:value="1100" style="stroke-width: 3px"></line></g></g><g class="ct-labels"></g></svg></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h2>159$ </h2><h6>écônmisé grace parrainage</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="media align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart2 flot-chart-container"><div class="chartist-tooltip"></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><line x1="13.571428571428571" x2="13.571428571428571" y1="69" y2="39.3" class="ct-bar" ct:value="1100" style="stroke-width: 3px"></line><line x1="20.714285714285715" x2="20.714285714285715" y1="69" y2="44.7" class="ct-bar" ct:value="900" style="stroke-width: 3px"></line><line x1="27.857142857142858" x2="27.857142857142858" y1="69" y2="52.8" class="ct-bar" ct:value="600" style="stroke-width: 3px"></line><line x1="35" x2="35" y1="69" y2="42" class="ct-bar" ct:value="1000" style="stroke-width: 3px"></line><line x1="42.14285714285714" x2="42.14285714285714" y1="69" y2="50.1" class="ct-bar" ct:value="700" style="stroke-width: 3px"></line><line x1="49.285714285714285" x2="49.285714285714285" y1="69" y2="36.6" class="ct-bar" ct:value="1200" style="stroke-width: 3px"></line><line x1="56.42857142857143" x2="56.42857142857143" y1="69" y2="60.9" class="ct-bar" ct:value="300" style="stroke-width: 3px"></line></g><g class="ct-series ct-series-b"><line x1="13.571428571428571" x2="13.571428571428571" y1="39.3" y2="31.199999999999996" class="ct-bar" ct:value="300" style="stroke-width: 3px"></line><line x1="20.714285714285715" x2="20.714285714285715" y1="44.7" y2="31.200000000000003" class="ct-bar" ct:value="500" style="stroke-width: 3px"></line><line x1="27.857142857142858" x2="27.857142857142858" y1="52.8" y2="31.199999999999996" class="ct-bar" ct:value="800" style="stroke-width: 3px"></line><line x1="35" x2="35" y1="42" y2="31.200000000000003" class="ct-bar" ct:value="400" style="stroke-width: 3px"></line><line x1="42.14285714285714" x2="42.14285714285714" y1="50.1" y2="31.200000000000003" class="ct-bar" ct:value="700" style="stroke-width: 3px"></line><line x1="49.285714285714285" x2="49.285714285714285" y1="36.6" y2="31.200000000000003" class="ct-bar" ct:value="200" style="stroke-width: 3px"></line><line x1="56.42857142857143" x2="56.42857142857143" y1="60.9" y2="31.199999999999996" class="ct-bar" ct:value="1100" style="stroke-width: 3px"></line></g></g><g class="ct-labels"></g></svg></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>3</h4><br/><h6>parrainages</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="media border-none align-items-center">
                                    <div class="hospital-small-chart">
                                        <div class="small-bar">
                                            <div class="small-chart3 flot-chart-container"><div class="chartist-tooltip" style="top: -12.7812px; left: 17.9375px;"><span class="chartist-tooltip-value">1000</span></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><line x1="13.571428571428571" x2="13.571428571428571" y1="69" y2="58.2" class="ct-bar" ct:value="400" style="stroke-width: 3px"></line><line x1="20.714285714285715" x2="20.714285714285715" y1="69" y2="52.8" class="ct-bar" ct:value="600" style="stroke-width: 3px"></line><line x1="27.857142857142858" x2="27.857142857142858" y1="69" y2="47.4" class="ct-bar" ct:value="800" style="stroke-width: 3px"></line><line x1="35" x2="35" y1="69" y2="42" class="ct-bar" ct:value="1000" style="stroke-width: 3px"></line><line x1="42.14285714285714" x2="42.14285714285714" y1="69" y2="50.1" class="ct-bar" ct:value="700" style="stroke-width: 3px"></line><line x1="49.285714285714285" x2="49.285714285714285" y1="69" y2="39.3" class="ct-bar" ct:value="1100" style="stroke-width: 3px"></line><line x1="56.42857142857143" x2="56.42857142857143" y1="69" y2="60.9" class="ct-bar" ct:value="300" style="stroke-width: 3px"></line></g><g class="ct-series ct-series-b"><line x1="13.571428571428571" x2="13.571428571428571" y1="58.2" y2="31.200000000000003" class="ct-bar" ct:value="1000" style="stroke-width: 3px"></line><line x1="20.714285714285715" x2="20.714285714285715" y1="52.8" y2="39.3" class="ct-bar" ct:value="500" style="stroke-width: 3px"></line><line x1="27.857142857142858" x2="27.857142857142858" y1="47.4" y2="31.199999999999996" class="ct-bar" ct:value="600" style="stroke-width: 3px"></line><line x1="35" x2="35" y1="42" y2="33.9" class="ct-bar" ct:value="300" style="stroke-width: 3px"></line><line x1="42.14285714285714" x2="42.14285714285714" y1="50.1" y2="31.200000000000003" class="ct-bar" ct:value="700" style="stroke-width: 3px"></line><line x1="49.285714285714285" x2="49.285714285714285" y1="39.3" y2="33.9" class="ct-bar" ct:value="200" style="stroke-width: 3px"></line><line x1="56.42857142857143" x2="56.42857142857143" y1="60.9" y2="31.199999999999996" class="ct-bar" ct:value="1100" style="stroke-width: 3px"></line></g></g><g class="ct-labels"></g></svg></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="right-chart-content">
                                            <h4>18%</h4><br/><h6>rétrocession</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div>
            </div>


            <div class="container-fluid">
                <div class="row starter-main">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>CHIFFRE D'AFFAIRE MENSUEL</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-spin fa-cog"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                <!--
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>What is starter kit ?</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-spin fa-cog"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Starter kit is a set of pages with different layouts, useful for your next project to
                                    start development process from scratch with no time.</p>
                                <ul>
                                    <li>
                                        <p>Each layout includes basic components only.</p>
                                    </li>
                                    <li>
                                        <p>Select your choice of layout from starter kit, customize it with optional
                                            changes like colors and branding, add required dependency only.</p>
                                    </li>
                                    <li>
                                        <p>Using template engine to generate whole template quickly with your selected
                                            layout and other custom changes. </p>
                                    </li>
                                </ul>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head1" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;p&gt;Starter kit is a set of pages with different layouts, useful for your next project to start development process from scratch with no time. &lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;p&gt;Each layout includes basic components only.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;Select your choice of layout from starter kit, customize it with optional changes like colors and branding, add required dependency only.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;Using template engine to generate whole template quickly with your selected layout and other custom changes.&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>How to use starter kit ?</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa-spin fa-cog"></i></li>
                                        <li><i class="view-html fa fa-code"></i></li>
                                        <li><i class="icofont icofont-maximize full-card"></i></li>
                                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                                        <li><i class="icofont icofont-error close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><span class="f-w-600">HTML</span></p>
                                <p>If you know just HTML, select your choice of layout from starter kit folder,
                                    customize it with optional changes like colors and branding, add required dependency
                                    only.</p>
                                <p><span class="f-w-600">PUG</span></p>
                                <p>To use PUG it required node.js and basic knowledge of using it. Using PUG as template
                                    engine to generate whole template quickly with your selected layout and other custom
                                    changes. To getting start with PUG usage & template generating process please refer
                                    template documentation.</p>
                                <div class="alert alert-primary inverse" role="alert"><i class="icon-info-alt"></i>
                                    <h5>Tips!</h5>
                                    <p>Hideable navbar option is available for fixed navbar with static navigation only.
                                        Works in top and bottom positions, single and multiple navbars.</p>
                                </div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                            data-clipboard-target="#example-head2" title="Copy"><i
                                            class="icofont icofont-copy-alt"></i></button>
                                    <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;p&gt;&lt;span class="f-w-600"&gt;HTML&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;If you know just HTML, select your choice of layout from starter kit folder, customize it with optional changes like colors and branding, add required dependency only.&lt;/p&gt;
&lt;p&gt;&lt;span class="f-w-600"&gt;PUG&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;To use PUG it required node.js and basic knowledge of using it. Using PUG as template engine to generate whole template quickly with your selected layout and other custom changes. To getting start with PUG usage & template generating process please refer template documentation.&lt;/p&gt;
&lt;div class="alert alert-primary inverse" role="alert"&gt;
&lt;i class="icon-info-alt"&gt;&lt;/i&gt;
&lt;h5&gt;Tips!&lt;/h5&gt;
&lt;p&gt;Hideable navbar option is available for fixed navbar with static navigation only. Works in top and bottom positions, single and multiple navbars.&lt;/p&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                <!--
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Simple Card</h5>
                            </div>
                            <div class="card-body">
                                <h6>HTML Ipsum Presents</h6>
                                <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada
                                    fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget,
                                    tempor sit amet, ante. Donec eu libero sit amet quam egestas
                                    semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo.
                                    Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi,
                                    condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean
                                    fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus
                                    lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut
                                    felis.
                                </p>
                                <h6>Header Level 2</h6>
                                <ol>
                                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                    <li>Aliquam tincidunt mauris eu risus.</li>
                                </ol>
                                <div class="figure d-block">
                                    <blockquote class="blockquote">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras
                                            in mi at felis aliquet congue. Ut a est eget ligula molestie gravida.
                                            Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est
                                            malesuada
                                            tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
                                        </p>
                                    </blockquote>
                                </div>
                                <h4>Header Level<span> 3</span></h4>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                    <li>Aliquam tincidunt mauris eu risus.</li>
                                </ul>
                                <pre>#header h1 a {
  display: block;
  width: 300px;
  height: 80px;
}</pre>
                                <dl>
                                    <dt>Definition list</dt>
                                    <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat.
                                    </dd>
                                    <dt>Lorem ipsum dolor sit amet</dt>
                                    <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat.
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>With Header</h5>
                            </div>
                            <div class="card-body">
                                <h5>Content title</h5>
                                <p>Add a heading to card with <code>.card-header</code> class</p>
                                <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header </code> &
                                    <code>.card-title</code> class to add heading.</p>
                                <p>Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake
                                    sugar plum. Marshmallow wafer tiramisu jelly beans.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <h5>With Header & No Border</h5>
                            </div>
                            <div class="card-body">
                                <h5>Content title</h5>
                                <p>Add a heading to card with <code>.card-header </code> class & without header
                                    border<code>.border-bottom-0</code> class.</p>
                                <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header </code> &
                                    <code>.card-title</code> class to add heading.</p>
                                <p>Gingerbread brownie sweet roll cheesecake chocolate cake jelly beans marzipan gummies
                                    dessert. Jelly beans sugar plum cheesecake cookie oat cake soufflé.</p>
                            </div>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Digital Unicorn </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
    @include('library.thuvien')
</body>
</html>