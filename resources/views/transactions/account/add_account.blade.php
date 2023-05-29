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
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/bs-select/bs-select.css")}}">
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/daterange/daterange.css")}}">


    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    <link href="path/to/select2.css" rel="stylesheet" /> -->
    <style>
        .text-radio {
            margin-left: 2%;
            margin-bottom: 1%;
            color: #5957b1;
        }
        .card {
            overflow: hidden;
        }
         .half-width-container {
            display: flex;
            width: 50%;
            /* justify-content: space-between; */
        }
        input[type="radio"] {
            display: none;
        }
        label{
    margin-bottom: 2%;
}
        .label {
            width: 35%;
            text-align: center;
            padding: 10px;
            border: 1px solid #D9D9D9;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="radio"]:checked+.label {
            background-color: #5957b1;
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


        .modal {
            text-align: center;
        }

        .modal-content {
            background-color: #fefefe;
            margin: auto;
            /* padding: 20px; */
            border: 1px solid #888;
            width: 80%;
            max-width: 400px;
        }

        .modal .modal-header {
            background: #5957b1;
            color: #ffffff;
            border: 0;
            border-radius: 3px 3px 0 0;
        }

        .modal .modal-body {
            padding: 1.2rem;
            max-height: calc(100vh - 180px);
        }

        .modal .modal-footer {
            border-top: 1px solid #e1e8f3;
            padding: .2rem .75rem;
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


            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <form action="">
                        
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <!-- Card start -->
                            <div class="card" style="overflow: hidden">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Tambah Akun<button type="button" style="border: none; background:none;">☆</button></h3>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <!-- Row start -->
                                    <div class="row gutters">

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

                                            <div style="border-bottom: solid grey 1px;margin-bottom:1%">
                                                <h6>Umum</h6>
                                                <p>Informasi kontak penyedia Anda akan muncul di tagihan dan profil mereka. Anda dapat menambahkan informasi kontak dan logo mereka untuk digunakan dalam tagihan.</p>
                                            </div>

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="field-wrapper">
                                        <div class="text-radio">Jenis<span class="text-danger">*</span></div>
                                            <div class="half-width-container">
                                            
                                                <input type="radio" name="option" id="option1"
                                                    value="Option 1" checked>
                                                <label class="label" for="option1">Bank</label>

                                                <input type="radio" name="option" id="option2"
                                                    value="Option 2">
                                                <label class="label" for="option2">Kartu Kredit</label>
                                            </div>
    </div>

                                            <!-- Field wrapper start -->

                                            <!-- Field wrapper end -->

                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <!-- Field wrapper start -->

                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Masukkan Nama">
                                                    
                                                </div>
                                                <div class="field-placeholder">Nama<span class="text-danger">*</span></div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Masukan Nomor Rekening">
                                                    
                                                </div>
                                                <div class="field-placeholder">Nomor Rekening<span class="text-danger">*</span></div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                    
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->

                                            <div class="field-wrapper-group">
                                                <div class="field-wrapper">
                                                    <select class="select-multiple js-states" title="Select Product Category">
                                                        <option>Rupiah</option>
                                                        <option>Dollar</option>
                                                        <option>Ringgit</option>
                                                        <option>Yen</option>

                                                    </select>
                                                    <div class="field-placeholder">Mata Uang<span class="text-danger">*</span></div>
                                                </div>
                                                <button type="button" class="input-icon-block btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalmoney">
                                                    <i class="icon-plus1"></i>
                                                </button>
                                            </div>

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="number" placeholder="Rp0,00">
                                                <div class="field-placeholder">Saldo Saat Ini<span class="text-danger">*</span></div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">

                                            <div style="border-bottom: solid grey 1px;margin-bottom:1%">
                                                <h6>Bank</h6>
                                                <p>Anda mungkin memiliki beberapa rekening bank di lebih dari satu bank. Mencatat informasi tentang bank Anda akan memudahkan untuk mencocokkan transaksi dalam bank Anda.</p>
                                            </div>

                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text" placeholder="Masukkan Nama Bank">
                                                <div class="field-placeholder">Nama Bank<span class="text-danger">*</span></div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text" placeholder="Masukkan Telepon Bank">
                                                <div class="field-placeholder">Telepon Bank<span class="text-danger">*</span></div>
                                            </div>
                                            <!-- Field wrapper end -->

                                            </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <textarea class="form-control1" rows="2" placeholder="Masukkan Alamat Bank"></textarea>
                                                <div class="field-placeholder">Alamat Bank<span class="text-danger">*</span></div>
                                                <div class="form-text">
                                                    Silakan masukkan Alamat Bank.
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div >

                                       <div class="d-flex">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >
                                        <div  style=" float: right">
                                            <a href="{{url('transactions')}}"><button type="button" class="btn btn-outline-primary">Batal</button></a>
                                        
                                        <a href="{{url('add_income')}}" style="margin-left: 10px;" > <button type="button" class="btn btn-secondary">Simpan</button></a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                        


                                    </div>
                                    <!-- Button trigger modal -->


                                    <!-- Modal account start -->
                                    <form action="">
                                    <div class="modal fade" id="modalaccount" tabindex="-1" aria-labelledby="modalaccount" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content" style="padding: 0px">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Tambah Akun</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <input class="form-control" type="text" placeholder="Masukkan Nama Akun">
                                                            <div class="field-placeholder">Nama<span class="text-danger">*</span></div>
                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <input class="form-control" type="text" placeholder="Masukkan E-mail Akun">
                                                            <div class="field-placeholder">Nomor Rekening<span class="text-danger">*</span></div>
                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <input class="form-control" type="text" placeholder="Masukkan Nomor Telepone Akun">
                                                            <div class="field-placeholder">Mata Uang<span class="text-danger">*</span></div>
                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <input class="form-control" type="text" placeholder="Masukkan NPWP Akun">
                                                            <div class="field-placeholder">Saldo Awal<span class="text-danger">*</span></div>
                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Simpan</button>
                                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    <!-- Modal account end -->

                                    <!-- Modal category start -->
                                    <form action="">
                                    <div class="modal fade" id="modalcategory" tabindex="-1" aria-labelledby="modalcategory" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content" style="padding: 0px">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Tambah Kategori</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <input class="form-control" type="text" placeholder="Masukkan Nama Kategori">
                                                            <div class="field-placeholder">Nama<span class="text-danger">*</span></div>
                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <div class="d-flex">
                                                                <input class="form-control" type="text" placeholder="Masukkan Warna">
                                                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
                                                            </div>
                                                            <div class="field-placeholder">Warna<span class="text-danger">*</span></div>
                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>






                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Simpan</button>
                                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    <!-- Modal category end -->

                                    <!-- Modal customer start -->
                                    <form action="">
                                    <div class="modal fade" id="modalcustomer" tabindex="-1" aria-labelledby="modalcustomer" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content" style="padding: 0px">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Tambah Pelanggan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <input class="form-control" type="text" placeholder="Masukkan Nama Pelanggan">
                                                            <div class="field-placeholder">Nama<span class="text-danger">*</span></div>
                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <input class="form-control" type="text" placeholder="Masukkan E-mail Pelanggan">
                                                            <div class="field-placeholder">Email<span class="text-danger">*</span></div>
                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <input class="form-control" type="text" placeholder="Masukkan Nomor Telepone Pelanggan">
                                                            <div class="field-placeholder">Telepone<span class="text-danger">*</span></div>
                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <input class="form-control" type="text" placeholder="Masukkan NPWP Pelanggan">
                                                            <div class="field-placeholder">NPWP<span class="text-danger">*</span></div>
                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <input class="form-control" type="text" placeholder="Masukkan Mata Uang Pelanggan">
                                                            <div class="field-placeholder">Mata Uang<span class="text-danger">*</span></div>
                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <input class="form-control" type="text" placeholder="Masukkan Negara Pelanggan">
                                                            <div class="field-placeholder">Negara<span class="text-danger">*</span></div>
                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 28px;">

                                                        <!-- Field wrapper start -->
                                                        <div class="field-wrapper">
                                                            <textarea class="form-control1" rows="2" placeholder="Masukkan Alamat Pelanggan"></textarea>
                                                            <div class="field-placeholder">Alamat<span class="text-danger">*</span></div>

                                                        </div>
                                                        <!-- Field wrapper end -->

                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Simpan</button>
                                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    <!-- Modal customer end -->


                                    <!-- Row end -->

                                </div>
                            </div>
                            <!-- Card end -->

                        </div>
                        </form>
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
    <script src="{{ asset ("Gmbslagi/js/jquery.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/modernizr.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/js/moment.js")}}"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Megamenu JS -->
    <script src="{{ asset ("Gmbslagi/vendor/megamenu/js/megamenu.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/megamenu/js/custom.js")}}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset ("Gmbslagi/vendor/slimscroll/slimscroll.min.js")}}"></script>
    <script src="{{ asset ("vvendor/slimscroll/custom-scrollbar.js")}}"></script>

    <!-- Search Filter JS -->
    <script src="{{ asset ("Gmbslagi/vendor/search-filter/search-filter.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/search-filter/custom-search-filter.js")}}"></script>

    <!-- Main Js Required -->
    <script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>

    <script src="{{ asset ("Gmbslagi/vendor/bs-select/bs-select.min.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/bs-select/bs-select-custom.js")}}"></script>

    <script src=" {{ asset ("Gmbslagi/vendor/daterange/daterange.js")}}"></script>
    <script src="{{ asset ("Gmbslagi/vendor/daterange/custom-daterange.js")}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script> -->
    <!-- <script src="path/to/select2.js"></script> -->


    <!-- <script>
        new TomSelect('#ex-dropdown-input1', {
            plugins: ['dropdown_input'],
        });
        new TomSelect('#ex-dropdown-input2', {
            plugins: ['dropdown_input'],
        });
        new TomSelect('#ex-dropdown-input3', {
            plugins: ['dropdown_input'],
        });
        new TomSelect('#ex-dropdown-input4', {
            plugins: ['dropdown_input'],
        });
    </script> -->
    <!-- <script>
        $(document).ready(function() {
            $('#mySelect').select2();
        });
    </script> -->
    <script>
        function openModal() {
            var select = document.getElementById("select");
            var selectedValue = select.value;

            if (selectedValue !== "") {
                var modal = document.getElementById("myModal");
                modal.style.display = "block";
            }
        }

        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>


</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->

</html>