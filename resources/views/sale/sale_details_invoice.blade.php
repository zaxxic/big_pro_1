<!doctype html>
<html lang="en">

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->

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
    <link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/summernote/summernote-bs4.css")}}" />
   
      }

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

                        </div>
                        <!-- Search container end -->

                    </div>
                </div>
                <!-- Row end -->

            </div>
            <!-- Page header ends -->

            <!-- Content wrapper scroll start -->
            <div class="content-wrapper-scroll">

                <!-- Content wrapper start -->
                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" style="margin-left: -2%">

                            <!-- Card start -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">
                                        <h3>Details<button type="button"
                                                style="border: none; background:none;">☆</button></h3>
                                    </div>
                                    <div class="btn btn-danger" style="border-radius: 10px; background-color: #ffd2d2; color:#D21312; height: 30px; width: 20%; border:none">
										Terkirim
										</div>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-primary" style="border-radius: 10px; color:#4e58eb; background-color:#c5d2fc" role="alert">
                                        Faktur ini dihasilkan otomatis dari a RCI-00001
                                    </div>
                                    <!-- Faq start -->
                                    <div class="accordion" id="faqAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    <div class="d-flex row">
                                                        <p style="font-size:14pt">Membuat</p>
                                                        <br>
                                                        <p style="font-size:10pt">Trisqi membuat faktur ini pada <b>24
                                                                mei 2023</b> </p>
                                                    </div>

                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <button type="button"
                                                        style="border-radius: 10px; width:18%; height: 30px; border:none;">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    <div class="d-flex row">
                                                        <p style="font-size:14pt">Kirim</p>
                                                        <br>
                                                        <p style="font-size:10pt">Terakhir dikirim <b>28 mei 2023</b>
                                                        </p>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                  <!-- Button trigger modal -->
                                                    <button type="button"style="border-radius:10px; width:30%; height: 30px; border:none; background-color:#c5d2fc" data-bs-toggle="modal" data-bs-target="#modals">
                                                        Kirim Email
                                                    </button>
                                                    <button type="button"
                                                        style="border-radius:10px; width:30%; height:30px; border:none">Tandai
                                                        Dikirim</button>
                                                        <button type="button" style="border-radius:10px; width:36%; height:30px; border:none; margin-top:1%" data-bs-toggle="modal" data-bs-target="#exampleModalLarge">
                                                            Bagikan Tautan
                                                        </button>
                                                        <!-- Modal start -->
                                                        <div class="modal fade" id="exampleModalLarge" tabindex="-1" aria-labelledby="exampleModalLargeTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLargeTitle">Membagikan Tautan</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <p class="text-center">Pelanggan Anda dapat melihat faktur di tautan ini :</p>
                                                                        <p align="center">
                                                                        <input type="text" value="https://app.akaunting.com/251226/signed/invoices/2690652?signature=994924046d84d0dc857d9fda311fd6c28e2579f9e56dc8d307781d15fb42f0c8" id="myInput" size="43">
                                                                        </p>
                                                                        <p class="text-center">Salin tautan dan bagikan dengan pelanggan Anda.</p>
                                                                        <p class="text-center">Pratinjau di jendela baru</p>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <div type="button" class="btn btn-danger" style="background-color:rgb(255, 0, 0); border:none; border-radius:10px; width:20%; height:25px; color:white" data-bs-dismiss="modal">Batal</div>
                                                                    <button type="button" onclick="myFunction()" style="background-color: #55be0e; border:none; border-radius:10px; width:30%; height:25px; color:white">Salin</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal end -->
                                                </div>
                                                  <!-- Modal start -->
                                            <div class="modal fade" id="modals" tabindex="-1" aria-labelledby="modalsTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content" style="height:100%; margin-top:-10%">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalsTitle">Kirim Email</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="field-wrapper mb-2">
                                                                <div class="summernote"></div>
                                                            </div> 
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div type="button" class="btn btn-danger" style="background-color:rgb(255, 0, 0); border:none; border-radius:10px; width:20%; height:25px; color:white" data-bs-dismiss="modal">Batal</div>
                                                            <button type="button" style="background-color: #55be0e; border:none; border-radius:10px; width:30%; height:25px; color:white">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal end -->
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    <div class="d-flex row">
                                                        <p style="font-size:14pt">Telah dibayar</p>
                                                        <br>
                                                        <p style="font-size:10pt">Nilai jatuh tempo:
                                                            <b>90.000.000,00</b> </p>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                                <div class="accordion-body">
                                                    <button type="button" data-bs-toggle="modal" style="border-radius:10px; width:45%; height:30px; border:none; background-color:#55be0e; color:white" data-bs-target="#exampleModalExtraLarge">
                                                        Tambahkan Pembayaran
                                                    </button>
                                                    <p style="margin-top: 2%">Menerima Pembayaran Daring</p>
                                                    <p>Pembayaran Diterima:</p>
                                                    <p>Tidak Ada Catatan</p>
                                                </div>
                                                 <!-- Modal start -->
                                                <div class="modal fade" id="exampleModalExtraLarge" tabindex="-1" aria-labelledby="exampleModalExtraLargeTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-xl">
                                                        <div class="modal-content" style="margin-top: -9%">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalExtraLargeTitle">Tambah Pembayaran</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="field-wrapper mb-3">
                                                                    <label for="judul" class="field-label">Tanggal</label>
                                                                    <input class="form-control" type="text" placeholder="Masukkan Tanggal" style="border-radius:10px">
                                                                  </div>
                                                                  <div class="field-wrapper mb-3">
                                                                    <label for="judul" class="field-label">Jumlah</label>
                                                                    <input class="form-control" type="text" placeholder="Masukkan Jumlah" style="border-radius:10px">
                                                                  </div>
                                                                    <div class="field-wrapper mb-3">
                                                                      <label for="judul" class="field-label">Metode Pembayaran <span class="text-danger">*</span></label>
                                                                      <select id="ex-dropdown-input" autocomplete="off" placeholder="How cool is this?" style="border-radius:10px">
                                                                        <option selected>Cash</option>
                                                                        <option>Transfer Bank</option>
                                                                      </select>                                                  
                                                                    </div>
                                                                    <div class="field-wrapper mb-3">
                                                                      <label for="judul" class="field-label">Akun <span class="text-danger">*</span></label>
                                                                      <select id="ex-dropdown-input" autocomplete="off" placeholder="How cool is this?" style="border-radius:10px">
                                                                        <option>Rudi</option>
                                                                        <option selected>Ruli</option>
                                                                        <option>Adi</option>
                                                                        <option>Daffa</option>
                                                                        <option>Gembes</option>
                                                                        <option>Reno</option>
                                                                        <option>Triski</option>
                                                                      </select>                                                  
                                                                    </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div type="button" class="btn btn-danger" style="background-color:rgb(255, 0, 0); border:none; border-radius:10px; width:20%; height:25px; color:white" data-bs-dismiss="modal">Batal</div>
                                                                <button type="button" style="background-color: #55be0e; border:none; border-radius:10px; width:30%; height:25px; color:white">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Faq end -->

                                </div>
                            </div>
                            <!-- Card end -->

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12"
                            style="margin-left: -3%; margin-top: 8%">
                            <div class="login-wrapper">
                                <form
                                    action="https://www.kodingwife.com/demos/unipro/v1-x/05-desig4-violet/reports.html">
                                    <div class="login-screen">
                                        <div class="login-body pb-4">
                                            <p>Biaya nikah</p>
                                            <div class="d-flex row">
                                                <div class="col-8">
                                                    <img style="width: 25%"
                                                        src="{{ asset('Gmbslagi/img/Carausel/person.jpg') }}"
                                                        alt="Uni Pro Admin">
                                                </div>
												<div class="ml-2 col-4">
                                                <p style="float: right">cina baik hati</p>
                                                <br>
                                                <p style="float: right">unknown company</p>
                                                <br>
                                                <p style="float: right">cireng@gmail.com</p>
											</div>
                                            </div>
                                            <div class="field-wrapper mb-3">
												<div style="border-bottom: solid grey 1px; margin-top: 4%">
                                            </div>
											<div class="d-flex" style="margin-top: 2%">
											<div class="col-6">
												<p>Tagihan Kepada</p>
												<p>Koirul</p>
												<p>1672671</p>
												<p>cireng@gmail.com</p>
											</div>
											<div class="col-6">
												<p>Nomor faktur: INV-9</p>
												<p>Tanggal faktur: 24 mei 2023</p>
												<p>Tanggal Jatuh Tempo: 24 mei 2023</p>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table products-table">
												<thead>
													<tr>
														<th>Item</th>
														<th>Kuantitas</th>
														<th>Harga</th>
														<th>Jumlah</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<p>api maps</p>
															<br>
															<p style="font-size: 8pt; margin-top: -10%">pembelian api untuk map</p>
														</td>
														<td><span class="badge">1</span></td>
														<td>385.000,00</td>
														<td>385.000,00</td>
													</tr>
												</tbody>
											</table>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12" style="float: right; margin-bottom: -5%">
												<!-- Card start -->
                                                    <div class="card">
                                                        <div class="card-body">  
															<li class="list-group-item">Subtotal: 9000000 </li>
															<li class="list-group-item">Ppn(20%): 9000000 </li>
															<li class="list-group-item">PPH(12%): 9000000 </li>
															<li class="list-group-item">Total: 9000000 </li>
														</ul>
													</div>
												</div>
												<!-- Card end -->
											</div>
                                           
										</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
    <script src="{{ asset("Gmbslagi/vendor/summernote/summernote-bs4.js")}}"></script>
    <script>

        // Summernote
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 210,
                tabsize: 2,
                focus: true,
                toolbar: [
          ['font', ['bold', 'underline', 'clear']],
          ['para', ['ul', 'ol']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']],
        ]
            });
        });

    </script>
    <script>function myFunction() {
        // Get the text field
        var copyText = document.getElementById("myInput");
      
        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices
      
         // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);
      
        // Alert the copied text
        alert("Copied the text: " + copyText.value);
      }</script>
</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->

</html>
