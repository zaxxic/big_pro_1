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

    <style>
        .color-input-container {
            display: flex;
            align-items: center;
        }

        .color-input-container input[type="color"] {
            margin-right: 10px;
        }
    </style>
    <!-- *************
   ************ Common Css Files *************
  ************ -->
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

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
                      

                    </div>
                   
                </div>
                <!-- Row end -->

            </div>
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper" style="overflow-x:hidden">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <!-- Card start -->
                            <div class="">
                                <div class="card-title">
                                    <h3>Tambah Kategori<button type="button"
                                            style="border: none; background:none;">☆</button></h3>
                                </div>
                            </div>

                            <!-- Row start -->
                            <div class="row gutters">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                    style="margin-bottom: 1%;">

                                    <div style="border-bottom: solid grey 1px;margin-bottom:1%">
                                        <h6>Umum</h6>
                                        <p>Informasi kontak penyedia Anda akan muncul di tagihan dan profil mereka. Anda
                                            dapat menambahkan informasi kontak dan logo mereka untuk digunakan dalam
                                            tagihan.</p>
                                    </div>

                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<form action="/category">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="email" placeholder="Masukan Nama Kategori">
                                        <div class="field-placeholder">Nama <span class="text-danger">*</span></div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="color-input-container">
                                            <input type="color" style="width: 10%;background:transparent"
                                                id="color-picker">
												<div class="field-placeholder">Warna <span class="text-danger">*</span></div>
                                            <input type="text" id="hex-input" readonly>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
										<div class="field-placeholder">Jenis <span class="text-danger">*</span></div>

                                        <select id="ex-dropdown-input-1" autocomplete="on" data-placeholder="Masukan jenis kategori">
											<option>Biaya</option>
											<option >Item</option>
											<option>Lainnya</option>
											<option>Pendapatan</option>
										</select>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
										<div class="field-placeholder">Induk Kategori <span class="text-danger">*</span></div>

                                        <select id="ex-dropdown-input" autocomplete="off" placeholder="How cool is this?">
											<option>Deposit</option>
											<option>penjualan</option>
											<option>umun</option>
										</select>
                                    </div>
                                    <!-- Field wrapper end -->

                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-left: 81%">
                                    <a href="#" style="margin-right: 4%">Batal</a>
                                    <button class="btn btn-primary" type="submit" style="border-radius: 20px">Simpan</button>
                                </div>
                            </div>
                            <!-- Row end -->
						</form>
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
    <script src="{{ asset('vvendor/slimscroll/custom-scrollbar.js') }}"></script>

    <!-- Search Filter JS -->
    <script src="{{ asset('Gmbslagi/vendor/search-filter/search-filter.js') }}"></script>
    <script src="{{ asset('Gmbslagi/vendor/search-filter/custom-search-filter.js') }}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset('Gmbslagi/js/main.js') }}"></script>
    <script>
        const colorPicker = document.getElementById('color-picker');
        const hexInput = document.getElementById('hex-input');

        colorPicker.addEventListener('input', (event) => {
            const color = event.target.value;
            hexInput.value = color;
        });
    </script>
    <script>
       new TomSelect('#ex-dropdown-input',{
	plugins: ['dropdown_input'],
});
    </script>
    <script>
       new TomSelect('#ex-dropdown-input-1',{
	plugins: ['dropdown_input'],
});
    </script>
</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

</html>
