<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/layout-tabs-tooltip.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:56 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Uni Pro Admin Template - Admin Dashboard</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/bootstrap.min.css") }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/fonts/style.css") }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/laporan.css") }}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/megamenu/css/megamenu.css") }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.css") }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .text-subjudul {
            color: #454f58;
        }
        .dropdown1-btn {
            background-color: #FFFFFF;
            color: black;
            padding: 8px;
            border: none;
            font-size: 15pt;
            width: 10px;
            cursor: pointer;

        }

        .dropdown1-btn:hover {
            color: #000;
        }

        .dropdown1-content {
            padding: 10px;
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 5px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 100;
            right: 30px;
            top: 40px;
        }

        .dropdown1-content:after {
            margin-top: 10%;
        }

        .dropdown1-content a {
            color: black;
            padding: 5px 5px;
            text-decoration: none;
            display: block;
        }

        .dropdown1-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown1:hover .dropdown1-content {
            display: block;
        }

        .dropdown2-btn {
            background-color: #FFFFFF;
            color: black;
            padding: 8px;
            border: none;
            font-size: 15pt;
            width: 10px;
            cursor: pointer;

        }

        .dropdown2-btn:hover {
            color: #000;
        }

        .dropdown2-content {
            padding: 10px;
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 5px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 100;
            right: 30px;
            top: 40px;
        }

        .dropdown2-content:after {
            margin-top: 10%;
        }

        .dropdown2-content a {
            color: black;
            padding: 5px 5px;
            text-decoration: none;
            display: block;
        }

        .dropdown2-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown2:hover .dropdown2-content {
            display: block;
        }

        .dropdown3-btn {
            background-color: #FFFFFF;
            color: black;
            padding: 8px;
            border: none;
            font-size: 15pt;
            width: 10px;
            cursor: pointer;

        }

        .dropdown3-btn:hover {
            color: #000;
        }

        .dropdown3-content {
            padding: 10px;
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 5px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 100;
            right: 30px;
            top: 40px;
        }

        .dropdown3-content:after {
            margin-top: 10%;
        }

        .dropdown3-content a {
            color: black;
            padding: 5px 5px;
            text-decoration: none;
            display: block;
        }

        .dropdown3-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown3:hover .dropdown3-content {
            display: block;
        }

        .dropdown4-btn {
            background-color: #FFFFFF;
            color: black;
            padding: 8px;
            border: none;
            font-size: 15pt;
            width: 10px;
            cursor: pointer;

        }

        .dropdown4-btn:hover {
            color: #000;
        }

        .dropdown4-content {
            padding: 10px;
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 5px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 100;
            right: 30px;
            top: 40px;
        }

        .dropdown4-content:after {
            margin-top: 10%;
        }

        .dropdown4-content a {
            color: black;
            padding: 5px 5px;
            text-decoration: none;
            display: block;
        }

        .dropdown4-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown4:hover .dropdown4-content {
            display: block;
        }

        .dropdown5-btn {
            background-color: #FFFFFF;
            color: black;
            padding: 8px;
            border: none;
            font-size: 15pt;
            width: 10px;
            cursor: pointer;

        }

        .dropdown5-btn:hover {
            color: #000;
        }

        .dropdown5-content {
            padding: 10px;
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 5px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 100;
            right: 30px;
            top: 40px;
        }

        .dropdown5-content:after {
            margin-top: 10%;
        }

        .dropdown5-content a {
            color: black;
            padding: 5px 5px;
            text-decoration: none;
            display: block;
        }

        .dropdown5-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown5:hover .dropdown5-content {
            display: block;
        }

        .dropdown6-btn {
            background-color: #FFFFFF;
            color: black;
            padding: 8px;
            border: none;
            font-size: 15pt;
            width: 10px;
            cursor: pointer;

        }

        .dropdown6-btn:hover {
            color: #000;
        }

        .dropdown6-content {
            padding: 10px;
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 5px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 100;
            right: 30px;
            top: 40px;
        }

        .dropdown6-content:after {
            margin-top: 10%;
        }

        .dropdown6-content a {
            color: black;
            padding: 5px 5px;
            text-decoration: none;
            display: block;
        }

        .dropdown6-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown6:hover .dropdown6-content {
            display: block;
        }

        .before {
            fill: #c4c2c2;
        }

        .after {
            fill: #000;
        }

        .black {
            color: #000;
        }

        .text-before {
            color: #c4c2c2;
        }
    </style>
</head>

<body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <!-- Loading wrapper end -->

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Sidebar wrapper start -->
        @include('layouts.sidebar')

        <!-- Sidebar wrapper end -->

        <!-- *************
				************ Main container start *************
			************* -->
        <div class="main-container" style="background-color: #FFFFFF;">

            <!-- Page header starts -->
            @include('layouts.header')
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="card-body">
                        <div class="row gutters">
                            <div class="col-xl-12">
                                <!-- Card start -->
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-6">
                                        <div class="card-title">
                                            <h3>Laporan<button type="button" style="border: none; background:transparent;">☆</button></h3>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-6">
                                        <div class="graph-day-selection" role="group" style="margin-left: 68%">
                                            <a href="{{url('add_report')}}">
                                                <button type="button" class="btn active" style="background: transparent">Tambah</button>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-5">
                                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                                        <div class="card" style="text-align: center;">
                                            <div class="sematkan-icon">
                                                <i class="icon-shopping-cart1 black" style="font-size: 28px;"></i>
                                            </div>
                                        </div>
                                        <div class="card" style="text-align: center;">
                                            <p>Ringkasan Pengeluaran</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                                        <div class="card" style="text-align: center;">
                                            <div class="sematkan-icon">
                                                <i class="icon-calendar1 black" style="font-size: 28px;"></i>
                                            </div>
                                        </div>
                                        <div class="card" style="text-align: center;">
                                            <p>Ringkasan Calendar</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                                        <div class="card" style="text-align: center;">
                                            <div class="sematkan-icon">
                                                <i class="icon-file-text black" style="font-size: 28px;"></i>
                                            </div>
                                        </div>
                                        <div class="card" style="text-align: center;">
                                            <p>Ringkasan Laporan</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                                        <div class="card" style="text-align: center;">
                                            <div class="sematkan-icon">
                                                <i class="icon-tag1 black" style="font-size: 28px;"></i>
                                            </div>
                                        </div>
                                        <div class="card" style="text-align: center;">

                                            <p>Ringkasan Penjualan</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6" style="margin-top: -2px;">
                                        <div class="card" style="text-align: center;">
                                            <div class="sematkan-icon-before">
                                                <svg class="before" style="transform: rotate(30deg);" xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="39">
                                                    <path d="m634-448 86 77v60H510v241l-30 30-30-30v-241H240v-60l80-77v-332h-50v-60h414v60h-50v332Zm-313 77h312l-59-55v-354H380v354l-59 55Zm156 0Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="card" style="text-align: center;">
                                            <p class="text-before">Sematkan laporan anda</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6" style="margin-top: -2px;">
                                        <div class="card" style="text-align: center;">
                                            <div class="sematkan-icon">
                                                <svg class="before" style="transform: rotate(30deg);" xmlns="http://www.w3.org/2000/svg" height="32" viewBox="0 -960 960 960" width="39">
                                                    <path d="m634-448 86 77v60H510v241l-30 30-30-30v-241H240v-60l80-77v-332h-50v-60h414v60h-50v332Zm-313 77h312l-59-55v-354H380v354l-59 55Zm156 0Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="card" style="text-align: center;">
                                            <p class="text-before">Sematkan laporan anda</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg">
                                    <h5 class="text-subjudul mt-3">Pendapatan dan Pengeluaran</h5>
                                    <hr class="col-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="ringkasan d-flex">
                                                <div class="d-flex">
                                                    <a href="show_report">
                                                        <div class="ringkasan-icon">
                                                            <i class="icon-shopping-cart1" style="margin-bottom: 22px;"></i>
                                                        </div>
                                                        <div class="sale-details">
                                                            <h5>Ringkasan Pengeluaran</h5>
                                                    </a>
                                                    <p>Ringkasan pengeluaran bulanan</p>
                                                </div>
                                            </div>
                                            <a href="" class="" style="margin-left: auto;"><svg class="after" style="transform: rotate(30deg); margin-bottom: 22px;" xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 -960 960 960" width="39">
                                                    <path d="m634-448 86 77v60H510v241l-30 30-30-30v-241H240v-60l80-77v-332h-50v-60h414v60h-50v332Zm-313 77h312l-59-55v-354H380v354l-59 55Zm156 0Z" />
                                                </svg>
                                            </a>
                                            <button class="dropdown1-btn icon-more-vertical" style="margin-bottom: 8%;"></button>
                                            <div class="dropdown1-content">
                                                <a href="#">Sunting</a>
                                                <a href="#">Hapus</a>

                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="ringkasan d-flex">
                                            <div class="d-flex">
                                                <div class="ringkasan-icon">
                                                    <i class="icon-shopping-cart1" style="margin-bottom: 22px;"></i>
                                                </div>
                                                <div class="sale-details">
                                                    <h5>Ringkasan Pendapatan</h5>
                                                    </a>
                                                    <p>Ringkasan pendapatan bulanan</p>
                                                </div>
                                            </div>
                                            <a href="" class="" style="margin-left: auto;"><svg class="after" style="transform: rotate(30deg); margin-bottom: 22px;" xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 -960 960 960" width="39">
                                                    <path d="m634-448 86 77v60H510v241l-30 30-30-30v-241H240v-60l80-77v-332h-50v-60h414v60h-50v332Zm-313 77h312l-59-55v-354H380v354l-59 55Zm156 0Z" />
                                                </svg>
                                            </a>
                                            <button class="dropdown2-btn icon-more-vertical" style="margin-bottom: 8%;"></button>
                                            <div class="dropdown2-content">
                                                <a href="#">Sunting</a>
                                                <a href="#">Hapus</a>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="ringkasan d-flex">
                                            <div class="d-flex">
                                                <div class="ringkasan-icon">
                                                    <i class="icon-shopping-cart1" style="margin-bottom: 22px;"></i>
                                                </div>
                                                <div class="sale-details">
                                                    <h5>Ringkasan Pengeluaran</h5>
                                                    </a>
                                                    <p>Ringkasan pengeluaran bulanan</p>
                                                </div>
                                            </div>
                                            <a href="" class="" style="margin-left: auto;"><svg class="after" style="transform: rotate(30deg); margin-bottom: 22px;" xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 -960 960 960" width="39">
                                                    <path d="m634-448 86 77v60H510v241l-30 30-30-30v-241H240v-60l80-77v-332h-50v-60h414v60h-50v332Zm-313 77h312l-59-55v-354H380v354l-59 55Zm156 0Z" />
                                                </svg>
                                            </a>
                                            <button class="dropdown3-btn icon-more-vertical" style="margin-bottom: 8%;"></button>
                                            <div class="dropdown3-content">
                                                <a href="#">Sunting</a>
                                                <a href="#">Hapus</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mt-3">Akuntansi </h5>
                                <hr class="col-12">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="ringkasan d-flex">
                                            <div class="d-flex">
                                                <a href="show_report2">
                                                    <div class="ringkasan-icon">
                                                        <i class="icon-shopping-cart1" style="margin-bottom: 22px;"></i>
                                                    </div>
                                                    <div class="sale-details">
                                                        <h5>Ringkasan Pengeluaran</h5>
                                                </a>
                                                <p>Ringkasan pengeluaran bulanan</p>
                                            </div>
                                        </div>
                                        <a href="" class="" style="margin-left: auto;"><svg class="after" style="transform: rotate(30deg); margin-bottom: 22px;" xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 -960 960 960" width="39">
                                                <path d="m634-448 86 77v60H510v241l-30 30-30-30v-241H240v-60l80-77v-332h-50v-60h414v60h-50v332Zm-313 77h312l-59-55v-354H380v354l-59 55Zm156 0Z" />
                                            </svg>
                                        </a>
                                        <button class="dropdown4-btn icon-more-vertical" style="margin-bottom: 8%;"></button>
                                        <div class="dropdown4-content">
                                            <a href="#">Sunting</a>
                                            <a href="#">Hapus</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="ringkasan d-flex">
                                        <div class="d-flex">
                                            <a href="show_report2">
                                                <div class="ringkasan-icon">
                                                    <i class="icon-shopping-cart1" style="margin-bottom: 22px;"></i>
                                                </div>
                                                <div class="sale-details">
                                                    <h5>Ringkasan Pengeluaran</h5>
                                            </a>
                                            <p>Ringkasan pengeluaran bulanan</p>
                                        </div>
                                    </div>
                                    <a href="" class="" style="margin-left: auto;"><svg class="after" style="transform: rotate(30deg); margin-bottom: 22px;" xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 -960 960 960" width="39">
                                            <path d="m634-448 86 77v60H510v241l-30 30-30-30v-241H240v-60l80-77v-332h-50v-60h414v60h-50v332Zm-313 77h312l-59-55v-354H380v354l-59 55Zm156 0Z" />
                                        </svg>
                                    </a>
                                    <button class="dropdown5-btn icon-more-vertical" style="margin-bottom: 8%;"></button>
                                    <div class="dropdown5-content">
                                        <a href="#">Sunting</a>
                                        <a href="#">Hapus</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="ringkasan d-flex">
                                    <div class="d-flex">
                                        <a href="show_report2">
                                            <div class="ringkasan-icon">
                                                <i class="icon-shopping-cart1" style="margin-bottom: 22px;"></i>
                                            </div>
                                            <div class="sale-details">
                                                <h5>Ringkasan Pengeluaran</h5>
                                        </a>
                                        <p>Ringkasan pengeluaran bulanan</p>
                                    </div>
                                </div>
                                <a href="" class="" style="margin-left: auto;"><svg class="after" style="transform: rotate(30deg); margin-bottom: 22px;" xmlns="http://www.w3.org/2000/svg" height="25" viewBox="0 -960 960 960" width="39">
                                        <path d="m634-448 86 77v60H510v241l-30 30-30-30v-241H240v-60l80-77v-332h-50v-60h414v60h-50v332Zm-313 77h312l-59-55v-354H380v354l-59 55Zm156 0Z" />
                                    </svg>
                                </a>
                                <button class="dropdown6-btn icon-more-vertical" style="margin-bottom: 8%;"></button>
                                <div class="dropdown6-content">
                                    <a href="#">Sunting</a>
                                    <a href="#">Hapus</a>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- Card end -->
    </div>
    </div>
    <!-- Row end -->

    </div>
    </div>
    <!-- Content wrapper end -->

    <!-- App Footer start -->
    <div class="app-footer">© Uni Pro Admin 2021</div>
    <!-- App footer end -->

    </div>
    <!-- Content wrapper scroll end -->

    </div>
    <!-- *************
				************ Main container end *************
			************* -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset("Gmbslagi/js/jquery.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/modernizr.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/moment.js") }}"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Megamenu JS -->
    <script src="{{ asset("Gmbslagi/vendor/megamenu/js/megamenu.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/megamenu/js/custom.js") }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset("Gmbslagi/vendor/slimscroll/slimscroll.min.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/slimscroll/custom-scrollbar.js") }}"></script>

    <!-- Search Filter JS -->
    <script src="{{ asset("Gmbslagi/vendor/search-filter/search-filter.js") }}"></script>
    <script src="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.js") }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset("Gmbslagi/js/main.js") }}"></script>
    <script src="{{ asset("Gmbslagi/js/report.js") }}"></script>
    <!-- Dropdown 1 -->
<script>
    var dropdownBtn1 = document.querySelector(".dropdown1-btn");
    var dropdownContent1 = document.querySelector(".dropdown1-content");

    document.addEventListener("click", function(event) {
        if (!event.target.matches(".dropdown1-btn") && !event.target.matches(".dropdown1-content")) {
            dropdownContent1.style.display = "none";
        }
    });

    dropdownBtn1.addEventListener("click", function() {
        dropdownContent1.style.display = (dropdownContent1.style.display === "block") ? "none" : "block";
    });
</script>

<!-- Dropdown 2 -->
<script>
    var dropdownBtn2 = document.querySelector(".dropdown2-btn");
    var dropdownContent2 = document.querySelector(".dropdown2-content");

    document.addEventListener("click", function(event) {
        if (!event.target.matches(".dropdown2-btn") && !event.target.matches(".dropdown2-content")) {
            dropdownContent2.style.display = "none";
        }
    });

    dropdownBtn2.addEventListener("click", function() {
        dropdownContent2.style.display = (dropdownContent2.style.display === "block") ? "none" : "block";
    });
</script>

<!-- Dropdown 3 -->
<script>
    var dropdownBtn3 = document.querySelector(".dropdown3-btn");
    var dropdownContent3 = document.querySelector(".dropdown3-content");

    document.addEventListener("click", function(event) {
        if (!event.target.matches(".dropdown3-btn") && !event.target.matches(".dropdown3-content")) {
            dropdownContent3.style.display = "none";
        }
    });

    dropdownBtn3.addEventListener("click", function() {
        dropdownContent3.style.display = (dropdownContent3.style.display === "block") ? "none" : "block";
    });
</script>

<!-- Dropdown 4 -->
<script>
    var dropdownBtn4 = document.querySelector(".dropdown4-btn");
    var dropdownContent4 = document.querySelector(".dropdown4-content");

    document.addEventListener("click", function(event) {
        if (!event.target.matches(".dropdown4-btn") && !event.target.matches(".dropdown4-content")) {
            dropdownContent4.style.display = "none";
        }
    });

    dropdownBtn4.addEventListener("click", function() {
        dropdownContent4.style.display = (dropdownContent4.style.display === "block") ? "none" : "block";
    });
</script>

<!-- Dropdown 5 -->
<script>
    var dropdownBtn5 = document.querySelector(".dropdown5-btn");
    var dropdownContent5 = document.querySelector(".dropdown5-content");

    document.addEventListener("click", function(event) {
        if (!event.target.matches(".dropdown5-btn") && !event.target.matches(".dropdown5-content")) {
            dropdownContent5.style.display = "none";
        }
    });

    dropdownBtn5.addEventListener("click", function() {
        dropdownContent5.style.display = (dropdownContent5.style.display === "block") ? "none" : "block";
    });
</script>

<!-- Dropdown 6 -->
<script>
    var dropdownBtn6 = document.querySelector(".dropdown6-btn");
    var dropdownContent6 = document.querySelector(".dropdown6-content");

    document.addEventListener("click", function(event) {
        if (!event.target.matches(".dropdown6-btn") && !event.target.matches(".dropdown6-content")) {
            dropdownContent6.style.display = "none";
        }
    });

    dropdownBtn6.addEventListener("click", function() {
        dropdownContent6.style.display = (dropdownContent6.style.display === "block") ? "none" : "block";
    });
</script>



</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/layout-tabs-tooltip.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:56 GMT -->

</html>
