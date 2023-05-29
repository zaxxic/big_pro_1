<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:53 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Show Akun</title>


    <!-- *************
			************ Common Css Files *************
		************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/css/bootstrap.min.css")}}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/fonts/style.css")}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/css/main.css")}}">


    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/megamenu/css/megamenu.css")}}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/search-filter/search-filter.css")}}">
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/search-filter/custom-search-filter.css")}}">

    <!-- Data Tables -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/datatables/dataTables.bs4.css")}}" />
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/datatables/dataTables.bs4-custom.css")}}" />
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/datatables/buttons.bs.css")}}" />
    <style>
        .text {
            text-align: center;
            color: #5e6973;
        }
        .dropdown-item {
            display: block;
            width: 100%;
            padding: .9rem 1rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            text-decoration: none;
            white-space: nowrap;
            background-color: #f9f9f9;
            border: 0;
            /* border-radius: 5px; */
            right: 0;
        }
        .dropdown-item-bt {
            display: block;
            width: 100%;
            padding: .9rem 1rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            text-decoration: none;
            white-space: nowrap;
            background-color: #f9f9f9;
            border: 0;
            border-bottom: 1px solid grey;
            /* border-radius: 5px; */
            right: 0;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            
            background-color: #DFDFDF;
            border-radius: 5px;
        }

        .dropdown-content {
            display: none;
        
            position: absolute;
            min-width: 160px;
            z-index: 1;
            background-color: #DFDFDF;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 10px;
            border-radius: 4px;
            right: 0;
            /* Mengarahkan dropdown ke arah kiri */
        }



        .dropdown-content a {
            display: block;
            padding: 5px 0;
            text-decoration: none;
            color: #333;
            z-index: 1000;
        }

        .btn-ekspor-primary {
            padding: 10px 9px;
            color: #000000;
            background-color: #E8E8E8;
            border-color: #E8E8E8;
            border-radius: 5px;
        }

        .btn-ekspor-primary:hover {
            color: #ffffff;
            background-color: #5957b1;
            border-color: #5957b1;
            border-radius: 5px;
        }

        .btn-check:focus+.btn-ekspor-primary,
        .btn-ekspor-primary:focus {
            color: #ffffff;
            background-color: #5957b1;
            border-color: #5957b1;
            outline: 0;
            -webkit-box-shadow: 0 0 0 .2rem rgba(89, 87, 177, .3);
            box-shadow: 0 0 0 .2rem rgba(89, 87, 177, .3);
        }

        

        .empty-box {
            /* text-align: ; */
            height: 25px;
            border: 0px;
            border-bottom: 2px solid grey;
        }

        .empty-box.active {
            height: 25px;
            border: 0px;
            border-bottom: 2px solid #f26861;
        }

        .empty-box:hover {
            height: 25px;
            border: 0px;
            border-bottom: 2px solid #f26861;
        }

        .searchcontainer {
            width: 90%;
            font-size: 20px;

            .icon-search {
                display: inline-block;
                margin-right: 50px;
                color: rgba(255, 255, 255, 0.5);
            }

            .search {
                width: 111%;
                display: inline-block;
                background-color: rgba(255, 255, 255, 0);
                border: 0px;
                color: grey;
                font-size: 16px;
                padding: 10px 0px;
                padding-left: 25px;
                border-bottom: 1px solid grey;

                &:focus {
                    outline: 0px;
                    border-bottom: 1px solid #ccc;
                }
            }
        }
    </style>

</head>

<body>

    <!-- Loading wrapper start -->
    <!-- <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div> -->
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



            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Hada<button type="button" style="border: none; background:none;">☆</button></h3>
                                    </div>
                                    <div class="dropdown">
                                        <a class="btn btn-ekspor-primary dropdown icon-dots-three-vertical" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-lg-end" style="z-index: 100;">
                                            <li><a class="dropdown-item" style="margin-top: 4%;" href="{{url('add_income')}}">Tambah Pendapatan</a></li>
                                            <li><a class="dropdown-item" href="{{url('add_income')}}">Tambah Pengeluaran</a></li>
                                            <li><a class="dropdown-item-bt" href="{{url('add_income')}}">Tambah Transfer</a></li>
                                            <li><a class="dropdown-item" href="{{url('add_income')}}">Sunting</a></li>
                                            <li><a class="dropdown-item" href="#">Cetak</a></li>
                                            <li><a class="dropdown-item" href="#">Unduh PDF</a></li>

                                        </ul>
                                    </div>

                                    <!-- <button >
                                        <span></span>
                                        <div class="dropdown-content">
                                            <a href="#" style="margin-top: 1%;"><span> Tambah </span></a>
                                            <a href="#" style="margin-top: 2%;"><span>Sunting</span></a>
                                            <a href="#" style="margin-top: 2%;"><span>Hapus</span></a>
                                            <a href="#" style="margin-top: 2%;"><span>Cetak</span></a>
                                            <a href="#" style="margin-top: 2%;"><span>Unduh PDF</span></a>

                                        </div>
                                    </button> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row gutters" style="margin-left: 5%; margin-bottom: -5%; margin-top: 3%;"> -->
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="stats-tile">
                                            <div class="sale-icon">
                                                <p><b><i>Rp</i></b></p>
                                            </div>
                                            <div class="sale-details">
                                                <h2>25.5M</h2>
                                                <p>Pendapatan</p>
                                            </div>
                                            <div class="sale-graph">
                                                <div id="sparklineLine1"></div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="stats-tile">
                                            <div class="sale-icon">
                                                <p><b><i>Rp</i></b></p>
                                            </div>
                                            <div class="sale-details">
                                                <h2>32.3M</h2>
                                                <p>Pengeluaran</p>
                                            </div>
                                            <div class="sale-graph">
                                                <div id="sparklineLine2"></div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="stats-tile">
                                            <div class="sale-icon">
                                                <p><b><i>Rp</i></b></p>
                                            </div>
                                            <div class="sale-details">
                                                <h2>19,9M</h2>
                                                <p>Saldo Saat Ini</p>
                                            </div>
                                            <div class="sale-graph">
                                                <div id="sparklineLine3"></div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- </div> -->
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">

                            <!-- Card start -->
                            <div class="card">

                                <div class="card-body">
                                    <div style="margin-top: 10%;"><h6>Nomor Rekening</h6></div>
                                    <span>0998958</span>
                                    <div style="margin-top: 10%;"><h6>Mata Uang</h6></div>
                                    <span>Rupiah</span>
                                    <div style="margin-top: 10%;"><h6>Saldo Awal</h6></div>
                                    <span>Rp700.000.000</span>
                                    <div style="margin-top: 10%;"><h6>Telepon Bank</h6></div>
                                    <span>085607338154</span>
                                    <div style="margin-top: 10%;"><h6>Alamat Bank</h6></div>
                                    <span>Jl. Kutilang</span>


                                    <!-- Row start -->

                                    <!-- Row end -->

                                </div>
                            </div>
                            <!-- Card end -->

                        </div>
                        
                        <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12"> -->

                        <!-- Card start -->
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="card-body" style="border-left: 1px solid #9a9c9e;">


                                <!-- Card start -->
                                <div class="card">


                                    <div class="card-body" style="float: right">

                                        <!-- Row start -->
                                        <div class="d-flex">
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6" >
                                        <div class="hr-switch">
                                            <a href="{{url('show_account1')}}">
                                                <div class="empty-box">
                                                    <h6 class="text">Transaksi</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-6" >
                                        <div class="hr-switch">
                                            <a href="{{url('show_account2')}}">
                                                <div class="empty-box active">
                                                    <h6 class="text">Transfer</h6>

                                                </div>
                                            </a>


                                        </div>

                                    </div>
                                </div>
                                        <div class="table-responsive">
                                        <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"> <input type="checkbox" id="select-all" onchange="toggleCheckbox()"></th>
                                                <th scope="col">Tanggal Dibuat</th>
                                                <th scope="col">Dari Akun</th>
                                                <th scope="col">Ke Akun</th>
                                                <th scope="col">Jumlah Asal</th>
                                                <th scope="col">Jumlah Tujuan</th>
                                                <th scope="col">Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td name="item" id="checkbox1"><input type="checkbox"></td>
                                                <td>16 Mei 2023</th>
                                                <td>Hadi</td>
                                                <td>Huda</td>
                                                <td>Rp900.000.000</td>
                                                <td>Rp900.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_transfer')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_transfer')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deletetransfer"></a>
                                                        <a href="{{url('show_transfer')}}" class="menu-icon icon-eye1"></a>
                                                        <a href="" class="menu-icon icon-block"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td name="item" id="checkbox1"><input type="checkbox"></td>
                                                <td>23 Agustus 2023</th>
                                                <td>Lana</td>
                                                <td>Lani</td>
                                                <td>Rp100.000.000</td>
                                                <td>Rp100.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_transfer')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_transfer')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deletetransfer"></a>
                                                        <a href="{{url('show_transfer')}}" class="menu-icon icon-eye1"></a>
                                                        <a href="" class="menu-icon icon-block"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td name="item" id="checkbox1"><input type="checkbox"></td>
                                                <td>12 Januari 2023</th>
                                                <td>Rara</td>
                                                <td>Roro</td>
                                                <td>Rp200.000.000</td>
                                                <td>Rp200.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_transfer')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_transfer')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deletetransfer"></a>
                                                        <a href="{{url('show_transfer')}}" class="menu-icon icon-eye1"></a>
                                                        <a href="" class="menu-icon icon-block"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td name="item" id="checkbox1"><input type="checkbox"></td>
                                                <td>2 Juli 2023</th>
                                                <td>Lala</td>
                                                <td>Lili</td>
                                                <td>Rp900.000.000</td>
                                                <td>Rp900.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_transfer')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_transfer')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deletetransfer"></a>
                                                        <a href="{{url('show_transfer')}}" class="menu-icon icon-eye1"></a>
                                                        <a href="" class="menu-icon icon-block"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td name="item" id="checkbox1"><input type="checkbox"></td>
                                                <td>7 Februari 2023</th>
                                                <td>Luka</td>
                                                <td>Laka</td>
                                                <td>Rp900.000.000</td>
                                                <td>Rp900.000.000</td>
                                                <th>
                                                    <div class="menu-icons" style="font-size: 15px;">
                                                        <a href="{{url('edit_transfer')}}" class="menu-icon icon-edit-2"></a>
                                                        <a href="{{url('delete_transfer')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deletetransfer"></a>
                                                        <a href="{{url('show_transfer')}}" class="menu-icon icon-eye1"></a>
                                                        <a href="" class="menu-icon icon-block"></a>
                                                    </div>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- Card end -->
                                </div>
                                        
                                    </div>
                                    <!-- Row end -->

                                </div>
                            </div>
                            <!-- Card end -->

                        </div>

                        <!-- Card end -->

                        <!-- </div> -->
                    </div>
                    <!-- Row end -->

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

    </divkolaja>
    <!-- Page wrapper end -->

    <!-- *************
			************ Required JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset ("Gmbslagi/js/jquery.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/modernizr.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/moment.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/dropdown.js")}}"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Megamenu JS -->
    <script src="{{ asset ("Gmbslagi/vendor/megamenu/js/megamenu.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/megamenu/js/custom.js")}}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset ("Gmbslagi/vendor/slimscroll/slimscroll.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/slimscroll/custom-scrollbar.js")}}"></script>

    <!-- Search Filter JS -->
    <script src="{{ asset ("Gmbslagi/vendor/search-filter/search-filter.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/search-filter/custom-search-filter.js")}}"></script>

    <!-- Data Tables -->
    <script src="{{ asset ("Gmbslagi/vendor/datatables/dataTables.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/dataTables.bootstrap.min.js")}}"></script>

    <!-- Custom Data tables -->
    <script src="{{ asset ("Gmbslagi/vendor/datatables/custom/custom-datatables.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/custom/fixedHeader.js")}}"></script>

    <!-- Download / CSV / Copy / Print -->
    <script src="{{ asset ("Gmbslagi/vendor/datatables/buttons.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/jszip.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/pdfmake.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/vfs_fonts.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/html5.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/datatables/buttons.print.min.js")}}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>
    <script>
        // Tambahkan event listener untuk menampilkan/menyembunyikan dropdown saat tombol titik tiga diklik
        document.querySelector('.dropdown-toggle').addEventListener('click', function() {
            document.getElementById('dropdown-menu').classList.toggle('show');
        });

        // Tambahkan event listener untuk menyembunyikan dropdown saat pengguna mengklik di luar dropdown
        document.addEventListener('click', function(event) {
            var dropdown = document.getElementById('dropdown-menu');
            if (!event.target.matches('.dropdown-toggle') && !event.target.matches('.dropdown-content button')) {
                if (dropdown.classList.contains('show')) {
                    dropdown.classList.remove('show');
                }
            }
        });
    </script>
    <script>
        function toggleCheckbox() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            var selectAllCheckbox = document.getElementById('select-all');

            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = selectAllCheckbox.checked;
            }
        }
    </script>


</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:54 GMT -->

</html>