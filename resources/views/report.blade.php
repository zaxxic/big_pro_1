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

</head>

<body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Sabar Ngentodd...
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
                    <div class="row gutters">
                        <div class="col-xl-12">
                            <!-- Card start -->
                            <div class="">
                                <div class="card-title">
                                <div class="d-flex flex-wrap">
                                        <h1 class="card-title col-xl-11 col-lg-11 col-md-10 col-sm-8 col-8" style="font-size: 20px;">Transaksi  <i class="icon-star2 " style="padding-left: 10px; font-size: 19px;"></i>     </h1>

                                        <button type="button" class="btn btn-secondary col-xl-1 col-lg-1 col-md-2 col-sm-4 col-4">Tambah</button>
                                    </div>
                            </div>

                            </div>
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
								<div class="sematkan">
									<div class="sematkan-icon">
                                        <i class="icon-pin"></i>
									</div>
									<p>Sematkan laporan anda</p>
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
								<div class="sematkan">
									<div class="sematkan-icon">
                                        <i class="icon-pin"></i>
									</div>
									<p>Sematkan laporan anda</p>
								</div>
							</div><div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
								<div class="sematkan">
									<div class="sematkan-icon">
                                        <i class="icon-pin"></i>
									</div>
									<p>Sematkan laporan anda</p>
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
								<div class="sematkan">
									<div class="sematkan-icon">
                                        <i class="icon-pin"></i>
									</div>
									<p>Sematkan laporan anda</p>
								</div>
							</div><div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
								<div class="sematkan">
									<div class="sematkan-icon">
                                        <i class="icon-pin"></i>
									</div>
									<p>Sematkan laporan anda</p>
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
								<div class="sematkan">
									<div class="sematkan-icon">
                                        <i class="icon-pin"></i>
									</div>
									<p>Sematkan laporan anda</p>
								</div>
							</div>
                        </div>

                                <div class="bg">
                                    <h5 class="mt-3">Pendapatan dan Pengeluaran</h5>
                                    <hr class="col-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="ringkasan d-flex">
                                                <div class="d-flex">
                                                    <a href="show_report"> <div class="ringkasan-icon">
                                                    <i class="icon-shopping-cart1"></i>
                                                    </div>
                                                    <div class="sale-details">
                                                        <h5>Ringkasan Pengeluaran</h5></a>
                                                        <p>Ringkasan pengeluaran bulanan</p>
                                                    </div>
                                                </div>
                                                <a href="" class="icon-pin" style="margin-left: auto;"> <a href="/" class="icon-more-vertical" ></a></a>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="ringkasan d-flex">
                                                <div class="d-flex">
                                                    <a href="show_report"> <div class="ringkasan-icon">
                                                    <i class="icon-shopping-cart1"></i>
                                                    </div>
                                                    <div class="sale-details">
                                                        <h5>Ringkasan Pengeluaran</h5></a>
                                                        <p>Ringkasan pengeluaran bulanan</p>
                                                    </div>
                                                </div>
                                                <a href="/calendar" class="icon-pin" style="margin-left: auto;"> <a href="/" class="icon-more-vertical" ></a></a>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="ringkasan d-flex">
                                                <div class="d-flex">
                                                    <a href="show_report"> <div class="ringkasan-icon">
                                                    <i class="icon-shopping-cart1"></i>
                                                    </div>
                                                    <div class="sale-details">
                                                        <h5>Ringkasan Pengeluaran</h5></a>
                                                        <p>Ringkasan pengeluaran bulanan</p>
                                                    </div>
                                                </div>
                                                <a href="/calendar" class="icon-pin" style="margin-left: auto;"> <a href="/" class="icon-more-vertical" ></a></a>
                                            </div>
                                        </div>
                                    <h5 class="mt-3">Akuntansi </h5>
                                    <hr class="col-12">
                                    <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="ringkasan d-flex">
                                                <div class="d-flex">
                                                    <a href="show_report"> <div class="ringkasan-icon">
                                                    <i class="icon-shopping-cart1"></i>
                                                    </div>
                                                    <div class="sale-details">
                                                        <h5>Ringkasan Pengeluaran</h5></a>
                                                        <p>Ringkasan pengeluaran bulanan</p>
                                                    </div>
                                                </div>
                                                <a href="/calendar" class="icon-pin" style="margin-left: auto;"> <a href="/" class="icon-more-vertical" ></a></a>
                                            </div>
                                        </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="ringkasan d-flex">
                                                <div class="d-flex">
                                                    <a href="show_report"> <div class="ringkasan-icon">
                                                    <i class="icon-shopping-cart1"></i>
                                                    </div>
                                                    <div class="sale-details">
                                                        <h5>Ringkasan Pengeluaran</h5></a>
                                                        <p>Ringkasan pengeluaran bulanan</p>
                                                    </div>
                                                </div>
                                                <a href="/calendar" class="icon-pin" style="margin-left: auto;"> <a href="/" class="icon-more-vertical" ></a></a>
                                            </div>
                                        </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="ringkasan d-flex">
                                                <div class="d-flex">
                                                    <a href="show_report"> <div class="ringkasan-icon">
                                                    <i class="icon-shopping-cart1"></i>
                                                    </div>
                                                    <div class="sale-details">
                                                        <h5>Ringkasan Pengeluaran</h5></a>
                                                        <p>Ringkasan pengeluaran bulanan</p>
                                                    </div>
                                                </div>
                                                <a href="/calendar" class="icon-pin" style="margin-left: auto;"> <a href="/" class="icon-more-vertical" ></a></a>
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
</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/layout-tabs-tooltip.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:56 GMT -->

</html>
