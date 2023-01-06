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
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
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
                    <div class="logo-wrapper"><a href="index.html"><img class="img-fluid"
                                src="public/assets/logo/logo4.png" alt=""></a></div>
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle"
                            data-feather="align-center"></i></div>
                </div>

                <div class="left-header col horizontal-wrapper ps-0">
                </div>

                <div class="nav-right col-8 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li class="maximize"><a class="text-dark" href="#!"
                                onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li class="profile-nav onhover-dropdown p-0 me-0">
                            <div class="media profile-media"><img class="b-r-10"
                                    src="public/assets/images/dashboard/profile.jpg" alt="">
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

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                        href="theme/index.html" target="_blank"><i
                                            data-feather="home"></i><span>Saisir</span></a></li>
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

                <!-- Container-fluid starts-->
                <div class="col-12 xl-100 chart_data_left box-col-12">
                    <div class="container-fluid">
                        <div class=" text-start m-0 p-4 text-start">
                            <div class="row mb-4">
                                <label for=" " class=" "> Invoices: </label>
                            </div>
                            <div class="row mb-4">
                                <div class="col-4  d-flex flex-row">
                                    <label for=" " class="w-50 mt-1">Period: </label>
                                    <input type="number" min="1" max="12" name="month"
                                        class="form-control" required>
                                </div>
                                <div class="col-4 d-flex flex-row ">
                                    <label for=" " class="w-50 mt-1">Start date: </label>
                                    <input type="date" name="startDate " class="form-control " required>
                                </div>
                                <div class="col-4 d-flex flex-row ">
                                    <label for=" " class="w-50 mt-1">End date: </label>
                                    <input type="date" name="endDate " class="form-control " required>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-4 d-flex flex-row ">
                                    <label for=" " class="w-50 mt-1">User: </label>
                                    <input type="text" name="user " class="form-control " required>
                                </div>
                                <div class="col-4 d-flex flex-row ">
                                    <label for=" " class="w-50 mt-1">Invoice number: </label>
                                    <input type="text" name="invoice " class="form-control " required>
                                </div>
                                <div class="col-4"></div>
                            </div>
                        </div>
                        <table class="table-sm table " style="width: 90%;">
                            <thead>
                                <tr>
                                    <th class="">Status</th>
                                    <th class="">Date</th>
                                    <th class="">Num.Invoice</th>
                                    <th class="">Username</th>
                                    <th class="">Rising</th>
                                    <th class="">Retrocession</th>
                                    <th class="" "> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); "></div>
                            </td>
                            <td>02/11/2022</td>
                            <td>202211-0001</td>
                            <td>Last name and first name</td>
                            <td>188.70$</td>
                            <td>17%</td>
                            <td>
                                <i class="fa-solid fa-caret-up fa-2x "></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); "></div>
                            </td>
                            <td>02/11/2022</td>
                            <td>202211-0001</td>
                            <td>Name</td>
                            <td>188.70$</td>
                            <td>17%</td>
                            <td>
                                <i class="fa-solid fa-caret-down fa-2x "></i>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="height: 27px; width: 27px; border-radius: 50%; background-color: rgb(203, 169, 125); border: 2px solid rgb(139, 82, 25); "></div>
                            </td>
                            <td>02/11/2022</td>
                            <td>202211-0001</td>
                            <td>Name</td>
                            <td>188.70$</td>
                            <td>17%</td>
                            <td>
                                <i class="fa-solid fa-caret-up fa-2x "></i>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="7 ">
                                <div class="d-flex flex-row justify-content-between ">
                                    <div style="width: 30%; ">
                                        <div class="d-flex flex-row justify-content-between ">
                                            <label for=" "> Total amount recovered: </label> 2.127.50
                                        </div>
                                        <div class="input-group d-flex flex-row justify-content-between ">
                                            <label for=" ">Number requisition:</label> 37
                                        </div>
                                        <div class="input-group d-flex flex-row justify-content-between ">
                                            <label for=" ">Retrocession rate: </label> 11%
                                        </div>
                                        <br><br><br><br>
                                        <div class="input-group d-flex flex-row justify-content-between ">
                                            <label for=" "><b>TOTAL: </b></label> 234.02$
                                        </div>
        
                                    </div>
                                    <a href=" " class="btn btn-outline-primary px-sm-2 " style="width:100px; height: 5%; text-align: center; ">Download</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
        </div>
        <!-- footer start-->
        {{-- <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Digital Unicorn </p>
                    </div>
                </div>
            </div>
        </footer> --}}
    </div>
</div>
</body>
    @include('library.thuvien')
</html>
