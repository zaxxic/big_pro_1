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
    <title>Unknown | Transaksi Berulang</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/bootstrap.min.css") }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/fonts/style.css") }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/css/main.css") }}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/megamenu/css/megamenu.css") }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/search-filter.css") }}">
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.css") }}">

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
        <div class="main-container">

            <div class="page-header">

                <!-- Row start -->
                <div class="row gutters">
                    <!-- <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9"> -->
                    <div class="col-xl-12 col-lg-1 col-md-1 col-sm-1 col-1">
                        <!-- <div class="col-12"> -->

                        <!-- Search container start -->
                        <div class="search-container">

                            <!-- Mega Menu Start -->

                            <span style="margin-bottom: 5px; font-size: 30px; width: 20%;" >Transaksi Berulang</span><i class="icon-star2" style="margin-left: 10px; font-size: 19px;"></i>
                            <div style="padding-left: 52%;" class="d-flex">
                                <button style="margin-left: 10px;" class="btn btn-secondary"><a href="{{url('add_pendapatan_berulang')}}"><span style="color: #ffffff;">Pendapatan Baru</span></a></button>
                                <button style="margin-left: 10px;" class="btn btn-secondary"><a href="{{url('add_pengeluaran_berulang')}}"><span style="color: #ffffff;">Pengeluaran Baru</span></a></button>
                            </div>

                            <!-- Mega Menu End -->

                        </div>
                        <!-- Search container end -->

                    </div>

                </div>
                <!-- Row end -->
            </div>

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">


                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 cool-12">
                           

                            <div class="d-flex" style="margin-top: 1%;">

                                <a href="{{url('transaksi')}}" style="margin-top: 3%;"><span style="font-size: 16px; margin-left: 30px;">&emsp;Transaksi</span></a>
                                <a href="{{url('transaksi_berulang')}}" style="margin-top: 3%;"><span style="font-size: 16px; margin-left: 80px;">&emsp;Transaksi Berulang</span></a>
                            </div>
                            <div class="d-flex">
                                <hr class="hr-switch1">
                                <hr class="hr-switch2">
                            </div>
                            <div class="content">
                            <div class="searchcontainer">
                                <i class="icon-search"></i><input class="search" type="text" placeholder="Cari Disini.."
                                style="margin-bottom: 2%; font-size:10pt;"/>
                            </div>
    
                            <div class="table-responsive">

                                <table class="table caption-top" style="margin-top: 1%;">
                                    <!-- <caption>List of users</caption> -->
                                    <thead>
                                        <tr>
                                        <th><input type="checkbox" style="width: 18px; height: 18px;"></th>
                                            <th scope="col"><span style="font-size: 16px;">Tanggal Mulai</span></th>
                                            <th scope="col">Tanggal Berakhir</th>
                                            <th scope="col">Jenis</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td><input type="checkbox" style="width: 18px; height: 18px;"></td>
                                            <th scope="row">13 Mei 2023</th>
                                            <td>19 Mei 2023</td>
                                            <td>Pendapatan</td>
                                            <td>Penjualan Website</td>
                                            
                                            <td>
                                            <span style="font-size: 14px;" class="badge2">Selesai</span>
                                            </td>
                                            <td>Rp700.000.000</td>
                                        </tr>
                                        <tr>
                                        <td><input type="checkbox" style="width: 18px; height: 18px;"></td>
                                            <th scope="row">16 Mei 2023</th>
                                            <td>23 April 2023</td>
                                            <td>Pengeluaran</td>
                                            <td>Biaya Lain-Lain</td>
                                            <td>
                                            <span style="font-size: 14px;" class="badge1">Aktif</span>
                                            </td>
                                            <td>Rp900.000.000</td>
                                        </tr>
                                        <tr>
                                        <td><input type="checkbox" style="width: 18px; height: 18px;"></td>
                                        <th scope="row">23 Mei 2023</th>
                                            <td>31 Desember 2024</td>
                                            <td>Pendapatan</td>
                                            <td>Penjualan</td>
                                            <td>
                                            <span style="font-size: 14px;" class="badge2">Selesai</span>
                                            </td>
                                            <td>Rp200.000.000</td>
                                        </tr>
                                        <tr>
                                        <td><input type="checkbox" style="width: 18px; height: 18px;"></td>
                                        <th scope="row">34 Mei 2023</th>
                                            <td>1 Januari 2024</td>
                                            <td>Pendapatan</td>
                                            <td>Penjualan Website</td>
                                            <td>
                                            <span style="font-size: 14px;" class="badge1">Aktif</span>
                                            </td>
                                            <td>Rp1.000.000.000</td>
                                        </tr>
                                        <tr>
                                        <td><input type="checkbox" style="width: 18px; height: 18px;"></td>
                                        <th scope="row">34 Mei 2023</th>
                                            <td>15 Juli 2023</td>
                                            <td>Pengeluaran</td>
                                            <td>Biaya Listrik</td>
                                            <td>
                                            <span style="font-size: 14px;" class="badge2">Selesai</span>
                                            </td>
                                            <td>Rp1.000.000.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>

                   
                    <!-- Row end -->

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
    <script src="Gmbslagi/js/jquery.min.js"></script>
    <script src="Gmbslagi/js/bootstrap.bundle.min.js"></script>
    <script src="Gmbslagi/js/modernizr.js"></script>
    <script src="Gmbslagi/js/moment.js"></script>
    <script src="Gmbslagi/js/dropdown.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Megamenu JS -->
    <script src="Gmbslagi/vendor/megamenu/js/megamenu.js"></script>
    <script src="Gmbslagi/vendor/megamenu/js/custom.js"></script>

    <!-- Slimscroll JS -->
    <script src="Gmbslagi/endor/slimscroll/slimscroll.min.js"></script>
    <script src="Gmbslagi/vendor/slimscroll/custom-scrollbar.js"></script>

    <!-- Search Filter JS -->
    <script src="Gmbslagi/vendor/search-filter/search-filter.js"></script>
    <script src="vendor/search-filter/custom-search-filter.js"></script>

    <!-- Apex Charts -->
    <script src="Gmbslagi/vendor/apex/apexcharts.min.js"></script>
    <script src="Gmbslagi/vendor/apex/custom/home/salesGraph.js"></script>
    <script src="Gmbslagi/vendor/apex/custom/home/ordersGraph.js"></script>
    <script src="Gmbslagi/vendor/apex/custom/home/earningsGraph.js"></script>
    <script src="Gmbslagi/vendor/apex/custom/home/visitorsGraph.js"></script>
    <script src="Gmbslagi/vendor/apex/custom/home/customersGraph.js"></script>
    <script src="Gmbslagi/vendor/apex/custom/home/sparkline.js"></script>

    <!-- Circleful Charts -->
    <script src="Gmbslagi/vendor/circliful/circliful.min.js"></script>
    <script src="vendor/circliful/circliful.custom.js"></script>

    <!-- Main Js Required -->
    <script src="Gmbslagi/js/main.js"></script>

</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:01:19 GMT -->

</html>