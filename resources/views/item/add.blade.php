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
    <title>Uni Pro Admin Template - Admin Dashboard</title>


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
label{
    margin-bottom: 2%;
}
        .label {
            width: 50%;
            text-align: center;
            padding: 10px;
            border: 1px solid #D9D9D9;
            cursor: pointer;
            border-radius: 10px;
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
  background-color: #CCCCCC; /* Warna abu-abu saat indikator tidak aktif */
  border-radius: 15px;
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
  background-color: #FFFFFF; /* Warna biru saat indikator aktif */
  border-radius: 50%;
  transition: right 0.3s ease;
}

.toggle-checkbox:checked + .toggle-label {
  background-color: #336699; /* Warna biru saat toggle button aktif */
}

.toggle-checkbox:checked + .toggle-label:before {
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

        <!-- *************
    ************ Main container start *************
   ************* -->
        <div class="main-container">

            <!-- Page header starts -->
            <div class="page-header">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

                        <!-- Search container start -->
                        <div class="search-container">

                            <!-- Toggle sidebar start -->
                            <div class="toggle-sidebar" id="toggle-sidebar">
                                <i class="icon-menu"></i>
                            </div>
                            <!-- Toggle sidebar end -->

                            <!-- Mega Menu Start -->


                        </div>
                        <!-- Search container end -->

                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">

                        <!-- Header actions start -->
   
                           
                <!-- Row end -->

            </div>
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <!-- Card start -->
                            <div class="card">
                                <div class="card-header">
                                  
                                    <div class="card-title"><h3>Tambah Item<button type="button" style="border: none; background:none;">☆</button></h3></div>
                                        <div class="graph-day-selection" role="group" style="margin-left: 60%">
											
										</div>
                                      
                                <input type="checkbox" id="toggle" class="toggle-checkbox ">
                                <label for="toggle" class="toggle-label custom-bg "></label>
                            </div>

                                <div class="card-body">
                                    <div style="border-bottom: solid black 1px;margin-bottom:1%">
                                        <b>Umum</b>
                                        <p>Pilih kategori untuk membuat laporan Anda lebih detail. Deskripsi akan diisi saat item dipilih dalam faktur atau tagihan.</p>
                                    </div>
                                    <!-- Row start -->
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="half-width-container">
                                                <input type="radio" name="option" id="option1"
                                                    value="Option 1" checked>
                                                <label class="label" for="option1">produk</label>

                                                <input type="radio" name="option" id="option2"
                                                    value="Option 2">
                                                <label class="label" for="option2">Layanan</label>
                                            </div>

                                            <!-- Field wrapper start -->

                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text" placeholder=" Masukan nama">
                                                <div class="field-placeholder" >Nama <span
                                                        class="text-danger">*</span></div>
                                                <div class="form-text">
                                                   
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div class="form-group">
                                                    <div class="field-placeholder" >Kategori <span
                                                        class="text-danger">*</span></div>
                                                    <select class="form-control" id="dropdownSelect">
                                                      <option disabled selected>Pilih salah satu</option>
                                                      <option>Makanan</option>
                                                      <option>Umum</option>
                                                    </select>
                                                  </div>
                                                  
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 5%">

                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper">
                                                    <textarea class="form-control" rows="2"></textarea>
                                                    <div class="field-placeholder">Deskripsi <span
                                                            class="text-danger">*</span></div>
                                                    <div class="form-text">
                                                        Silakan masukkan Deskripsi.
                                                    </div>
                                                </div>
                                                <!-- Field wrapper end -->
    
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div style="border-bottom: solid black 1px;margin-bottom:1%">
                                            <b>Penagihan</b>
                                            <p>Informasi Penjualan digunakan dalam faktur, dan Informasi Pembelian digunakan dalam tagihan. Pajak akan diterapkan pada faktur dan tagihan.</p>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <!-- Field wrapper start -->
                                            
                                              <div class="row">
                                                <div class="col-md-6">
                                                    <input type="checkbox" id="checkbox1" name="checkbox1" onchange="toggleInputsDisable(1)">
                                                  <label for="checkbox1"> Informasi Penjualan</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox" id="checkbox2" name="checkbox2" onchange="toggleInputsDisable(2)">
                                                  <label for="checkbox2"> Informasi Pembelian</label>
                                                </div>
                                              </div>
                                         
                                            <!-- Field wrapper end -->
                                          </div>
                                          
                                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                              <input class="form-control" type="number" id="inputField1" name="inputField1" disabled>
                                              <div class="field-placeholder">Harga Jual</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                          </div>
                                          
                                          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                              <input class="form-control" type="text" id="inputField2" name="inputField2" disabled>
                                              <div class="field-placeholder">Harga Beli</div>
                                            </div>
                                            <!-- Field wrapper end -->
                                          </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div class="form-group">
                                                    <div class="field-placeholder" >Pajak <span
                                                        class="text-danger">*</span></div>
                                                    <select class="form-control" id="dropdownSelect">
                                                      <option disabled selected>Pilih salah satu</option>
                                                      <option>PPn</option>
                                                      <option>PPh</option>
                                                    </select>
                                                  </div>
                                                  
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                            style="margin-left: 81%">
                                            <a href="#" style="margin-right: 4%">Batal</a>
                                            <button class="btn btn-primary"
                                                style="border-radius: 20px">Simpan</button>
                                        </div>
                                    </div>
                                    <!-- Row end -->

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
