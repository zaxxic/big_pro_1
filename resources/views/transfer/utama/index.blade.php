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
    <title>Unknown | Transfer</title>


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

                            <h2 style="margin-bottom: 5px;">Transfer</h2><i class="icon-star2" style="margin-left: 10px; font-size: 19px;"></i>
                            <div style="padding-left: 70%;">
                                <button style="margin-left: 10px;" class="btn btn-secondary"><a href="{{url('add_pengeluaran')}}"><span style="color: #ffffff;">Transfer Baru</span></a></button>
                                <button style="margin-left: 10px;" class="btn btn-outline-primary"><a href="">Ekspor</a></button>
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
                            

                           
                            <div class="searchcontainer">
                                <i class="icon-search"></i><input class="search" type="text" placeholder="Cari Disini.."
                                style="margin-bottom: 2%; font-size:10pt;"/>
                            </div>
                            <div class="table-responsive">

                                <table class="table caption-top">
                                    <!-- <caption>List of users</caption> -->
                                    <thead>
                                        <tr>
                                        <th><input type="checkbox" style="width: 18px; height: 18px;"></th>
                                            <th scope="col">Tanggal Dibuat</th>
                                            <th scope="col">Dari Akun</th>
                                            <th scope="col">Ke Akun</th>
                                            <th scope="col">Jumlah Asal</th>
                                            <th scope="col">Jumlah Tujuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td><input type="checkbox" style="width: 18px; height: 18px;"></td>
                                            <th scope="row">13 Mei 2023</th>
                                            <td>Michael</td>
                                            <td>Sri</td>
                                            <td>Rp700.000.000</td>
                                            <td>Rp700.000.000</td>
                                        </tr>
                                        <tr>
                                        <td><input type="checkbox" style="width: 18px; height: 18px;"></td>
                                            <th scope="row">16 Mei 2023</th>
                                            <td>Budi</td>
                                            <td>Ugud</td>
                                            <td>Rp900.000.000</td>
                                            <td>Rp900.000.000</td>
                                        </tr>
                                        <tr>
                                        <td><input type="checkbox" style="width: 18px; height: 18px;"></td>
                                        <th scope="row">23 Mei 2023</th>
                                            <td>Handoko</td>
                                            <td>Melati</td>
                                            <td>Rp200.000.000</td>
                                            <td>Rp200.000.000</td>
                                        </tr>
                                        <tr>
                                        <td><input type="checkbox" style="width: 18px; height: 18px;"></td>
                                        <th scope="row">34 Mei 2023</th>
                                            <td>Maharani</td>
                                            <td>Lala</td>
                                            <td>Rp1.000.000.000</td>
                                            <td>Rp1.000.000.000</td>
                                        </tr>
                                        <tr>
                                        <td><input type="checkbox" style="width: 18px; height: 18px;"></td>
                                        <th scope="row">34 Mei 2023</th>
                                            <td>Diva</td>
                                            <td>Arya</td>
                                            <td>Rp1.000.000.000</td>
                                            <td>Rp1.000.000.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>

                    <!-- <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Visitors</div>
                                    <div class="graph-day-selection" role="group">
                                        <button type="button" class="btn active">Export</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="visitorsGraph" class="chart-height-md"></div>

                                    <ul class="stats-list-container">
                                        <li class="stats-list-item primary">
                                            <div class="stats-icon">
                                                <i class="icon-calendar1"></i>
                                            </div>
                                            <div class="stats-info">
                                                <h6 class="stats-title">Week 1</h6>
                                                <p class="stats-amount">25</p>
                                            </div>
                                        </li>
                                        <li class="stats-list-item primary">
                                            <div class="stats-icon">
                                                <i class="icon-calendar1"></i>
                                            </div>
                                            <div class="stats-info">
                                                <h6 class="stats-title">Week 2</h6>
                                                <p class="stats-amount">32</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">

                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Orders</div>
                                    <div class="graph-day-selection" role="group">
                                        <button type="button" class="btn active">View All</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="ordersGraph" class="chart-height-md"></div>

                                    <ul class="stats-list-container">
                                        <li class="stats-list-item primary">
                                            <div class="stats-icon">
                                                <i class="icon-archive1"></i>
                                            </div>
                                            <div class="stats-info">
                                                <h6 class="stats-title">New</h6>
                                                <p class="stats-amount">15</p>
                                            </div>
                                        </li>
                                        <li class="stats-list-item primary">
                                            <div class="stats-icon">
                                                <i class="icon-truck"></i>
                                            </div>
                                            <div class="stats-info">
                                                <h6 class="stats-title">Delivered</h6>
                                                <p class="stats-amount">10</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">

                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Earnings</div>
                                    <div class="graph-day-selection" role="group">
                                        <button type="button" class="btn active">Download</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="earningsGraph" class="chart-height-md"></div>

                                    <ul class="stats-list-container">
                                        <li class="stats-list-item primary">
                                            <div class="stats-icon">
                                                <i class="icon-briefcase"></i>
                                            </div>
                                            <div class="stats-info">
                                                <h6 class="stats-title">Today</h6>
                                                <p class="stats-amount">$25</p>
                                            </div>
                                        </li>
                                        <li class="stats-list-item primary">
                                            <div class="stats-icon">
                                                <i class="icon-briefcase"></i>
                                            </div>
                                            <div class="stats-info">
                                                <h6 class="stats-title">Yesterday</h6>
                                                <p class="stats-amount">$18</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div> -->
                    <!-- Row end -->

                    <!-- Row start -->
                    <!-- <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Recent Orders</div>
                                    <div class="graph-day-selection" role="group">
                                        <button type="button" class="btn active">Export to Excel</button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table products-table">
                                            <thead>
                                                <tr>
                                                    <th>Order No.</th>
                                                    <th>Ordered Date</th>
                                                    <th>Product</th>
                                                    <th>Delivery Status</th>
                                                    <th>Amount</th>
                                                    <th>Discount</th>
                                                    <th>Location</th>
                                                    <th>Est Delivery Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#55589</td>
                                                    <td>20/11/2020</td>
                                                    <td>
                                                        <img class="user" src="img/products/bag.jpg" alt="Product Image">
                                                    </td>
                                                    <td>
                                                        <span class="badge">Moving</span>
                                                    </td>
                                                    <td>$385.00</td>
                                                    <td>30%</td>
                                                    <td>Los Angeles, California</td>
                                                    <td>22/11/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>#23198</td>
                                                    <td>23/11/2020</td>
                                                    <td>
                                                        <img class="user" src="img/products/toy.jpg" alt="Product Image">
                                                    </td>
                                                    <td>
                                                        <span class="badge">Shipped</span>
                                                    </td>
                                                    <td>$539.00</td>
                                                    <td>25%</td>
                                                    <td>Arverne, New York</td>
                                                    <td>27/11/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>#87324</td>
                                                    <td>26/11/2020</td>
                                                    <td>
                                                        <img class="user" src="img/products/pencils.jpg" alt="Product Image">
                                                    </td>
                                                    <td>
                                                        <span class="badge">Pending</span>
                                                    </td>
                                                    <td>$671.00</td>
                                                    <td>35%</td>
                                                    <td>Mesquite, Texas</td>
                                                    <td>29/11/2020</td>
                                                </tr>
                                                <tr>
                                                    <td>#65673</td>
                                                    <td>25/11/2020</td>
                                                    <td>
                                                        <img class="user" src="img/products/camera.jpg" alt="Product Image">
                                                    </td>
                                                    <td>
                                                        <span class="badge">Cancelled</span>
                                                    </td>
                                                    <td>$490.00</td>
                                                    <td>21%</td>
                                                    <td>Hallandale, Florida</td>
                                                    <td>26/11/2020</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- Row end -->

                    <!-- Row start -->
                    <!-- <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="goal-container">
                                <div class="goal-info">
                                    <h5>Today's Goal</h5>
                                    <h6>70/100</h6>
                                </div>
                                <div class="goal-graph">
                                    <div id="todaysTarget"></div>
                                    <div class="circle-one"></div>
                                    <div class="circle-two"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="graph-card">
                                <h6>New Customers</h6>
                                <h4>2500</h4>
                                <div class="graph-placeholder">
                                    <div id="customersGraph"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="payments-card">
                                <h6>Balance</h6>
                                <h4>$5699.89</h4>
                                <div class="custom-btn-group mt-2">
                                    <button class="btn btn-outline-primary"><i class="icon-credit-card"></i>Deposit</button>
                                    <button class="btn btn-secondary"><i class="icon-credit-card"></i>Withdraw</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
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