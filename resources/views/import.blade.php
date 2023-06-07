<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:00:09 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Beranda</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/bootstrap.min.css") }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/fonts/style.css") }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/dashboard.css") }}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/daterange/daterange.css") }}">

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/megamenu/css/megamenu.css") }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.css") }}" />
    <style>
        .alert1 {
            position: relative;
            padding: 1rem 1rem;
            margin-bottom: 1rem;
            border: 1px solid transparent;
            border-radius: .25rem
        }

        .alert-light1 {
            color: #636464;
            background-color: #FFFFFF;
            border-color: #fdfdfe;
            box-shadow: 2px 2px 4px rgba(0, 0.2, 0.2, 0.3);
            border-top: 5px solid orange;
        }
        .font-p{
            color: #B87708;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Loading wrapper start -->
    <div id="loading-wrapper" role="status">
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
        <div class="main-container">

            <!-- Page header starts -->
            @include('layouts.header')
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h1 class="card-title col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="font-size: 20px;">Import Faktur</h1>
                                </div>
                            </div>
                            <!-- start -->
                            <div class="row mt-4">
                                <div class="alert1 alert-light1" role="alert">
                                    <p class="font-p">Jenis berkas yang diizinkan: XLS,XLSX</p>
                                    <p class="font-p">Baris maksimal yang diizinkan: 500</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content wrapper end -->

                    <!-- App footer start -->
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
        <script src="{{ asset("Gmbslagi/js/dropdown.js") }}"></script>

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

        <!-- Apex Charts -->
        <script src="{{ asset("Gmbslagi/vendor/apex/apexcharts.min.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/salesGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/ordersGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/earningsGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/visitorsGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/customersGraph.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/apex/custom/home/sparkline.js") }}"></script>
        <!-- Date Range JS -->
        <script src="{{ asset("Gmbslagi/vendor/daterange/daterange.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/daterange/custom-daterange.js") }}"></script>
        <!-- Circleful Charts -->
        <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.min.js") }}"></script>
        <script src="{{ asset("Gmbslagi/vendor/circliful/circliful.custom.js") }}"></script>

        <!-- Date Range JS -->
        <!-- Main Js Required -->
        <script src="{{ asset("Gmbslagi/js/main.js") }}"></script>
        <script src="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.js") }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://unpkg.com/tippy.js@6.3.1/dist/tippy-bundle.umd.js"></script>

        <script src="{{ asset("Gmbslagi/js/chart_index.js") }}"></script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:19 GMT -->

</html>
