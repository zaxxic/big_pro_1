<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Unknown | Sunting Mata Uang</title>


    <!-- *************
   ************ Common Css Files *************
  ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/css/bootstrap.min.css') }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/fonts/style.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/css/main.css') }}">


    <!-- *************
   ************ Vendor Css Files *************
  ************ -->

    <!-- Mega Menu -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/megamenu/css/megamenu.css') }}">

    <!-- Search Filter JS -->
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/search-filter/search-filter.css') }}">
    <link rel="stylesheet" href="{{ asset('Gmbslagi/vendor/search-filter/custom-search-filter.css') }}">

    <!-- Dropdown Search -->
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/bs-select/bs-select.css")}}">
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/daterange/daterange.css")}}">
    <style>
        .card {
            overflow: hidden;
        }

        .half-width-container {
            display: flex;
            width: 50%;
            justify-content: space-between;
        }

        input[type="radio"] {
            display: none;
        }

        label {
            margin-bottom: 2%;
        }

        .label {
            width: 50%;
            text-align: center;
            padding: 10px;
            border: 1px solid #D9D9D9;
            cursor: pointer;
            border-radius: 3px;
        }

        input[type="radio"]:checked+.label {
            background-color: #038BBD;
            color: #fff;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        .label {
            margin-right: 20px;
        }

        .toggle-checkbox {
            display: none;
        }

        .toggle-label {
            display: inline-block;
            width: 50px;
            height: 30px;
            background-color: #CCCCCC;
            /* Warna abu-abu saat indikator tidak aktif */
            border-radius: 3px;
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        .toggle-label:before {
            content: "";
            position: absolute;
            top: 1px;
            right: 1px;
            bottom: 1px;
            width: 24px;
            background-color: #FFFFFF;
            /* Warna biru saat indikator aktif */
            border-radius: 3%;
            transition: right 0.3s ease;
        }

        .toggle-checkbox:checked+.toggle-label {
            background-color: #336699;
            /* Warna biru saat toggle button aktif */
        }

        .toggle-checkbox:checked+.toggle-label:before {
            right: calc(100% - 25px);
        }
    </style>

</head>

<body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Sidebar wrapper start -->
        @include('layouts.sidebar')
        <!-- Sidebar wrapper end -->
        @include('layouts.header')

        <!-- *************
    ************ Main container start *************
   ************* -->
        <div class="main-container">

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <!-- Card start -->
                            
                                <div class="d-flex">
                                    <div class="col-xl-5 col-lg-5 col-md-2 col-sm-2 col-12">
                                        <div class="card-title">
                                            <h3>Sunting Mata Uang<button type="button" style="border: none; background:none;">☆</button></h3>
                                        </div>
                                        <div class="graph-day-selection" role="group" style="margin-left: 60%">

                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div style="border-bottom: solid grey 1px; margin-bottom: 1%;  margin-bottom: 2%; margin-top: 2%;">
                                        <h6>Umum</h6>
                                        <p>Mata uang bawaan saat ini digunakan pada Dasbor dan Laporan. Bagi mata uang yang lain, nilai tukar harus lebih rendah dari 1 untuk mata uang yang lebih lemah dan lebih dari 1 untuk mata uang yang lebih kuat.</p>
                                    </div>
                                    <!-- Row start -->
                                    <div class="row gutters">

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text" placeholder=" Masukan Nama ">
                                                <div class="field-placeholder">Nama <span class="text-danger">*</span></div>
                                                <div class="form-text">

                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper-group">
                                                <div class="field-wrapper">
                                                    <select class="select-multiple js-states" title="Select Product Category">
                                                        <option disabled selected>Pilih salah satu</option>
                                                        <option>AED</option>
                                                        <option>IDR</option>
                                                        <option>ALL</option>
                                                        <option>AUD</option>

                                                    </select>
                                                    <div class="field-placeholder">Kode<span class="text-danger">*</span></div>
                                                </div>

                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text" placeholder=" Masukan Kurs">
                                                <div class="field-placeholder">Kurs <span class="text-danger">*</span></div>
                                                <div class="form-text">

                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper-group">
                                                <div class="field-wrapper">
                                                    <select class="select-multiple js-states" title="Select Product Category">
                                                        <option disabled selected>Pilih salah satu</option>
                                                        <option>Sebelum Jumlah</option>
                                                        <option>Setelah Jumlah</option>
                                                        
                                                    </select>
                                                    <div class="field-placeholder">Posisi Simbol<span class="text-danger">*</span></div>
                                                </div>

                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text" placeholder=" Masukan Simbol">
                                                <div class="field-placeholder">Simbol <span class="text-danger">*</span></div>
                                                <div class="form-text">

                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text" placeholder=" Masukan Pemisahan Desimal">
                                                <div class="field-placeholder">Pemisah Desimal <span class="text-danger">*</span></div>
                                                <div class="form-text">

                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text" placeholder=" Masukan Pemisah Ribuan">
                                                <div class="field-placeholder">Pemisah Ribuan <span class="text-danger">*</span></div>
                                                <div class="form-text">

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->


                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">
                                            <div class="d-flex justify-content-end mt-4">
                                                <button class="btn btn-outline-secondary1" type="submit" style="border-radius: 2px; margin-right: 1%" href="{{url('currency')}}">Batal</button>
                                                <button class="btn btn-primary" type="submit" style="border-radius: 2px">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Field wrapper end -->



                            
                            <!-- Row end -->

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
    <script src="{{ asset('Gmbslagi/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/modernizr.js') }}"></script>
    <script src="{{ asset('Gmbslagi/js/moment.js') }}"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Megamenu JS -->
    <script src="{{ asset('Gmbslagi/vendor/megamenu/js/megamenu.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/megamenu/js/custom.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('Gmbslagi/vendor/slimscroll/slimscroll.min.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/slimscroll/custom-scrollbar.js') }}"></script>

    <!-- Search Filter JS -->
    <script src="{{ asset('Gmbslagi/vendor/search-filter/search-filter.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/search-filter/custom-search-filter.js') }}"></script>

    <!-- Dropdown Search -->
    <script src="{{ asset ("Gmbslagi/vendor/bs-select/bs-select.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/bs-select/bs-select-custom.js")}}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset('Gmbslagi/js/main.js') }}"></script>
    <script>
        function toggleInputsDisable(checkboxNumber) {
            var inputField1 = document.getElementById("inputField1");
            var inputField2 = document.getElementById("inputField2");

            if (checkboxNumber === 1) {
                inputField1.disabled = !inputField1.disabled;
            } else if (checkboxNumber === 2) {
                inputField2.disabled = !inputField2.disabled;
            }
        }
    </script>

</body>