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
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/css/bootstrap.min.css")}}">
		
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/fonts/style.css")}}">

		<!-- Main css -->
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/css/main.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>


		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Mega Menu -->
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/megamenu/css/megamenu.css")}}">

		<!-- Search Filter JS -->
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/search-filter/search-filter.css")}}">
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/search-filter/custom-search-filter.css")}}">
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.css")}}"/>
    <link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/daterange/daterange.css")}}">
        <style>
        .toggle-container {
      display: flex;
      align-items: center;
    }

    .toggle-label {
      margin-right: 10px;
    }

    .toggle-switch {
      position: relative;
      display: inline-block;
      width: 50px;
      height: 24px;
      background-color: #ccc;
      border-radius: 12px;
      transition: background-color 0.3s;
    }

    .toggle-switch:before {
      content: '';
      position: absolute;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background-color: white;
      top: 2px;
      transition: transform 0.3s;
    }

    .toggle-switch.checked {
      background-color: green;
    }

    .toggle-switch.checked:before {
      transform: translateX(26px);
    }

    .toggle-switch.unchecked:before {
      transform: translateX(0);
    }

    .toggle-text {
      font-weight: bold;
    }

    .toggle-text-yes {
      color: green;
    }

    .toggle-text-no {
      color: red;
    }
            .accordion-heading {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        }

        .accordion-title {
        margin-bottom: 0.5rem;
        }
        </style>
        <style>
          .row {
        &:first-child {
          padding-top: 20px;
        } 
      }

      .cat-title {
        display: inline-block;
        padding: 5px;
      }

      .cat-actions {
        display: inline-block;
        background-color: white;
        padding: 3px;
        margin-left: 10px;
        
        button {
          padding: 5px;
          line-height: 26px;
          box-shadow: none;
          color: black;
          background-color: transparent;
        }
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
					
							@include('layouts.header')

				

			
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
										<div class="card-title"><h3>Tambah Faktur<button type="button" style="border: none; background:none;">☆</button></h3></div>
									</div>
                                    <div class="card-body">
                                        
                                        <!-- Faq start -->
                                        <div class="accordion" id="faqAccordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="accordion-heading">
                                                          <h6 class="accordion-title">Perusahaan</h6>
                                                          <p class="accordion-description">Ubah alamat, logo, dan informasi lain perusahaanmu.</p>
                                                        </div>
                                                      </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                                    <div class="accordion-body">
                                                        <div class="d-flex row">
                                                            <div  class="col-xl-9 col-lg-12 col-md-12 col-sm-12">
                                                        <div class="d-flex align-items-center">
                                                          <div class="flex-grow-1 col-xl-8 col-lg-8 col-md-8 col-sm-12 col-8" style="margin-bottom: 15%">
                                                            <div class="field-wrapper">
                                                              <label for="judul" class="field-label">Judul <span class="text-danger">*</span></label>
                                                              <input class="form-control" type="text" id="judul" placeholder="Masukkan Judul" style="border-radius: 2px; margin-bottom: 10px;">
                                                            </div>
                                                            <div class="field-wrapper">
                                                              <label for="subjudul" class="field-label">Subjudul <span class="text-danger">*</span></label>
                                                              <input class="form-control" type="text" id="subjudul" placeholder="Masukkan Subjudul" style="border-radius: 2px; margin-bottom: 10px;">
                                                            </div>
                                                          </div>
                                                        </div>
                                                            </div>
                                                            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                                                              <div id="dropzone" style="height:300px">
                                                                <label for="subjudul" class="field-label">Logo<span class="text-danger">*</span></label>
                                                                <form action="https://www.kodingwife.com/upload" class="dropzone needsclick dz-clickable" id="demo-upload">
                                                                <div class="dz-message needsclick">
                                                                  <button type="button" class="dz-button">Pilih berkas di sini untuk mengunggah.</button><br>
                                                                </div>
                                                              </form>
                                                            </div>
                                                          </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                      </div>                                                                                                                                                                                                                       
                                                </div>
                                            </div>
                                            <div class="" style="margin-top: 2%;">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">
												
                                            <div style="border-bottom: solid grey 1px;">
                                              <h6>Tagihan</h6>
                                              <p>Detail penagihan muncul di faktur Anda. Tanggal Faktur digunakan di dasbor dan laporan. Pilih tanggal yang Anda harapkan untuk dibayar sebagai Tanggal Jatuh Tempo.</p>
                                            </div>

                                          </div>
                                            </div>
                                            <div class="row">
                                                <div class="field-wrapper mb-3 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12" style="margin-left: initial;height: 76px;margin-right: -1%;">
                                                  <label for="judul" class="field-label">Pelanggan <span class="text-danger">*</span></label>
                                                  <select id="ex-dropdown-input" autocomplete="off" placeholder="How cool is this?" style="height: 118px">
                                                    <option>Rudi</option>
                                                    <option selected>Ruli</option>
                                                    <option>Adi</option>
                                                    <option>Daffa</option>
                                                    <option>Gembes</option>
                                                    <option>Reno</option>
                                                    <option>Triski</option>
                                                  </select>                                                  
                                                </div>
                                                <div  class=" col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 d-flex">
                                                  <div class="col-6 ml-5 mr-5" style="margin-right:1%">
                                                  <div class="field-wrapper mb-3">
                                                    <label for="judul" class="field-label">Tanggal Faktur</label>
                                                    <input class="form-control datepicker" type="text">
                                                  </div>
                                                    <div class="field-wrapper mb-3">
                                                    <label for="judul" class="field-label">Tanggal Pembayaran<span class="text-danger">*</span></label>
                                                    <select id="ex-dropdown-input" autocomplete="off" placeholder="How cool is this?">
                                                      <option selected>Jatuh tempo dalam 15 hari</option>
                                                      <option>Jatuh tempo dalam 30 hari</option>
                                                      <option>Jatuh tempo dalam 45 hari</option>
                                                      <option>Jatuh tempo dalam 60 hari</option>
                                                      <option>Jatuh tempo dalam 90 hari</option>
                                                      <option>Jatuh tempo saat diterima</option>
                                                    </select>                                                  
                                                  </div>
                                                  </div>
                                                  <div class="col-6">
                                                  <div class="field-wrapper mb-3">
                                                    <label for="judul" class="field-label">Nomor Faktur </label>
                                                    <input class="form-control" type="number" placeholder="Masukkan Nomor Faktur">
                                                  </div>
                                                  <div class="field-wrapper mb-3">
                                                    <label for="judul" class="field-label">Jumlah Pesanan </label>
                                                    <input class="form-control" type="number" placeholder="Masukkan Jumlah Pesanan">
                                                  </div>
                                                  </div> 
                                                </div>
                                              </div>
                                            </div>
                                              <!-- Row start -->
                                            <div class="row gutters">
                                              <div class="col-12">
                                                <div class="table-responsive">
                                                  <table class="table table-borderless">
                                                    <thead>
                                                      <tr>
                                                        <th>Item</th>
                                                        <th>Deskripsi</th>
                                                        <th>Kuantitas</th>
                                                        <th>Harga</th>
                                                        <th>Jumlah</th>
                                                        <th>Pajak</th>
                                                        <th>Actions</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody id="table-body">
                                                      <tr>
                                                        <td>
                                                              <div class="field-wrapper m-0">
                                                                <select name="item[]" style="border-radius:2px" class="form-control">
                                                                  <option value="txt">Text</option>
                                                                  <option value="md">Markdown</option>
                                                                  <option value="html">HTML</option>
                                                                  <option value="php">PHP</option>
                                                                  <option value="python">Python</option>
                                                                  <option value="java">Java</option>
                                                                  <option value="js" selected>JavaScript</option>
                                                                  <option value="ruby">Ruby</option>
                                                                  <option value="vhdl">VHDL</option>
                                                                  <option value="verilog">Verilog</option>
                                                                  <option value="csharp">C#</option>
                                                                </select>
                                                              </div>
                                                            </td>
                                                        <td>
                                                          <div class="field-wrapper m-0">
                                                            <input type="text" style="border-radius:2px" name="deskripsi[]" class="form-control">
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="field-wrapper m-0">
                                                            <input type="number" style="border-radius:2px" name="kuantitas[]" class="form-control">
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="field-wrapper m-0">
                                                            <input type="number" style="border-radius:2px" name="harga[]" class="form-control">
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="field-wrapper m-0">
                                                            <input type="number" style="border-radius:2px" name="jumlah[]" class="form-control">
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div id="pajak-wrapper">
                                                            <div class="field-wrapper m-0 mb-1 pajak-input-wrapper">
                                                              <input type="number" style="border-radius:2px" name="pajak[]" class="form-control pajak-input">
                                                            </div>
                                                            <div class="add-pajak-wrapper mb-2">
                                                              <button class="btn btn-light add-pajak">
                                                                <i class="icon-plus"></i> Tambah Pajak
                                                              </button>
                                                            </div>
                                                          </div>
                                                        </td>
                                                        <td>
                                                          <div class="table-actions">
                                                            <button class="btn btn-light delete-row">
                                                              <i class="icon-trash-2"></i>
                                                            </button>
                                                          </div>
                                                        </td>
                                                      </tr>
                                                    </tbody>
                                                    <tfoot>
                                                      <tr>
                                                        <td colspan="5"></td>
                                                        <td>
                                                          <p class="m-0">Subtotal</p>
                                                          <p class="m-0">Diskon</p>
                                                          <p class="m-0">Total Pajak</p>
                                                          <h5 class="mt-2">Total</h5>
                                                        </td>
                                                        <td>
                                                          <p id="subtotal" class="m-0">Rp.0.00</p>
                                                          <p id="diskon" class="m-0">   <div class="field-wrapper m-0">
                                                            <input type="text"  style="border-radius:2px" name="deskripsi[]" class="form-control">
                                                          </div> </p>
                                                          <p id="total-pajak" class="m-0">Rp.0.00</p>
                                                          <h5 id="total" class="mt-2">Rp.0.00</h5>
                                                        </td>
                                                      </tr>
                                                    </tfoot>
                                                  </table>
                                                  
                                                  <button class="btn btn-primary" id="add-row">Tambah Baris</button>                                                  
                                                 	<!-- Button trigger modal -->
                                                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Tambah Item
                                                  </button>

                                                  <!-- Modal start -->
                                                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content" style="margin-top: -20%;">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                        <form>
                                                          <div class="field-wrapper m-0">
                                                              <label for="nama">Nama</label>
                                                            <input type="text" name="nama" style="border-radius:2px" placeholder="Masukan nama item" id="nama"class="form-control">
                                                          </div>
                                                          <div class="field-wrapper m-0">
                                                              <label for="nama">Harga Jual</label>
                                                            <input type="text" name="Harga"  style="border-radius:2px" placeholder="Masukan harga item" id="nama"class="form-control">
                                                          </div>
                                                          <div class="field-wrapper m-0">
                                                              <label for="nama">kategori</label>
                                                            <input type="text" name="kategori" style="border-radius:2px" placeholder="Masukan nama item" id="nama"class="form-control">
                                                          </div>
                                                          <div class="field-wrapper ">
                                                              <label for="nama">Pajak</label>
                                                            <input type="text" name="Pajak" style="border-radius:2px" placeholder="Masukan nama item" id="nama"class="form-control">
                                                          </div>
                                                        </form>
                                                      </div>
                                                      <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <!-- Modal end -->
                                                  </div>
                                              </div>
                                            </div>
                                            <!-- Row end -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 1%">
												
                                              <!-- Field wrapper start -->
                                              <div class="field-wrapper">
                                                <label for="judul" class="field-label">Catatan <span class="text-danger">*</span></label>
                                                <textarea class="form-control" placeholder="Masukan Catatan" rows="2"></textarea>
                                              </div>
                                              <!-- Field wrapper end -->                     
                                            </div>
                                            
                                          </div>
                                          <!-- Row end -->
                                          <div class="accordion-item" style="margin-top: 1%">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  <div class="accordion-heading">
                                                    <h6 class="accordion-title">Opsi Lanjutan</h6>
                                                    <p class="accordion-description">Pilih kategori, tambahkan, atau edit footer, dan tambahkan lampiran ke invoice-recurring.</p>
                                                  </div>
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                              <div class="accordion-body">
                                                <div class="d-flex row">
                                                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                    <div class="">
                                                      <div id="dropzone" style="height:300px">
                                                        <label for="subjudul" class="field-label">Lampiran<span class="text-danger">*</span></label>
                                                        <form action="https://www.kodingwife.com/upload" class="dropzone needsclick dz-clickable" id="demo-upload" style="margin-right: 10%">
                                                          <div class="dz-message needsclick">
                                                            <button type="button" class="dz-button">Pilih berkas di sini untuk mengunggah.</button><br>
                                                          </div>
                                                        </form>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 mt-5">
                                                        <select id="dropdown2" class="demo-code-language" placeholder="Select a language..." autocomplete="off">
                                                          <option value="txt">Text</option>
                                                          <option value="md">Markdown</option>
                                                          <option value="html">HTML</option>
                                                          <option value="php">PHP</option>
                                                          <option value="python">Python</option>
                                                          <option value="java">Java</option>
                                                          <option value="js" selected>JavaScript</option>
                                                          <option value="c#">Ruby</option>
                                                          <option value="c#">VHDL</option>
                                                          <option value="c#">Verilog</option>
                                                          <option value="c#">C#</option>
                                                          <option value="c++">C/C++</option>
                                                          <option value="c++">C/C++</option>
                                                        </select>
                                                        <div class="field-wrapper">
                                                          <label for="judul" class="field-label">Footer <span class="text-danger">*</span></label>
                                                          <textarea class="form-control" placeholder="Masukan Catatan" rows="2"></textarea>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>

                                        </div>
                                        <!-- Faq end -->

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
		<script src="{{ asset ("Gmbslagi/vendor/slimscroll/custom-scrollbar.js")}}"></script>

		<!-- Search Filter JS -->
		<script src="{{ asset ("Gmbslagi/vendor/search-filter/search-filter.js")}}"></script>
		<script src="{{ asset ("Gmbslagi/vendor/search-filter/custom-search-filter.js")}}"></script>

		<!-- Main Js Required -->
		<script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dynamicrows/dist/dynamicrows.min.js"></script>

    <script src="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.js")}}"></script>
    <script>
            // Inisialisasi Dropzone
            Dropzone.autoDiscover = false;
            var myDropzone = new Dropzone("#demo-upload", {
                maxFiles: 1, // Hanya boleh mengupload satu file
                init: function() {
                    this.on("addedfile", function(file) {
                        // Menghapus file sebelumnya saat ada file baru yang diupload
                        if (this.files.length > 1) {
                            this.removeFile(this.files[0]);
                        }
                    });
                }
            });
    </script>
    <!-- Date Range JS -->
		<script src="{{ asset ("Gmbslagi/vendor/daterange/daterange.js")}}"></script>
		<script src="{{ asset ("Gmbslagi/vendor/daterange/custom-daterange.js")}}"></script>
    <script>
      var toggleSwitch = document.querySelector('.toggle-switch');
      toggleSwitch.addEventListener('click', function() {
        toggleSwitch.classList.toggle('checked');
        var toggleTextYes = document.querySelector('.toggle-text-yes');
        var toggleTextNo = document.querySelector('.toggle-text-no');
        if (toggleSwitch.classList.contains('checked')) {
          toggleTextYes.style.color = 'green';
          toggleTextNo.style.color = 'black';
        } else {
          toggleTextYes.style.color = 'black';
          toggleTextNo.style.color = 'red';
        }
      });
    </script>
    <script>
      $('.wrapper').on('click', '.add-cat', function() {
      $('<div class="row cat"><div class="col s12"><select id="ex-dropdown-input-1" autocomplete="off" placeholder="How cool is this?" type="number" class="cat-title" contenteditable style="color: grey; width: 60%"><option>PPH(12%)</option><option selected>PPN(20%)</option></select><div class="cat-actions"><button class="btn cat-save"><p class="material-icons"><i class="icon-done"></i></p></button><button class="btn cat-delete"><p class="material-icons"><i class="icon-trash-2"></i></p></button></div><div class="row"></div></div></div>').appendTo('.wrapper');

      $('.cat:last-child').find('.cat-title').focus();

    });

    $('.wrapper').on('click', '.cat-save', function() {
      $(this).parent().prev().removeAttr('contenteditable');
      $(this).parent().html('<button class="btn cat-edit"><i class="material-icons"><i class="icon-settings1"></i></i></button>');
    });

    $('.wrapper').on('click', '.cat-delete', function() {
      $(this).parents('.cat').remove();
    });

    $('.wrapper').on('click', '.cat-edit', function() {
      $(this).parent().prev().attr('contenteditable', 'true').focus();
      $(this).parent().html('<button class="btn cat-save"><i class="material-icons"><i class="icon-done"></i></i></button><button class="btn cat-delete"><i class="material-icons"><i class="icon-trash-2"></i></i></button>');
    });

    $('.wrapper').on('click', '.add-link', function() {
      $('<div class="row"><div class="input-field col s3"><input id="name1" type="text"><label class="active" for="name1">Name 1</label></div><div class="input-field col offset-s1 s6"><input id="url1" type="text"><label class="active" for="url1">URL 1</label></div><div class="input-field col offset-s1 s1"><input id="keyb1" type="text"><label class="active" for="keyb1">Shortcut 1</label></div></div>').prependTo($(this).parent());
    });
    </script>
    <script>
      new TomSelect('#ex-dropdown-input-1',{
      plugins: ['dropdown_input'],
    });
    </script>
    <script>
      new TomSelect('#ex-dropdown-input',{
      plugins: ['dropdown_input'],
    });
    </script>
    <script>
      new TomSelect('#select-code-language',{
      sortField: 'text',
      hideSelected: false,
      plugins: {
        'dropdown_header': {
          title: '<button id="btn-add-row" style="border:none; background: transparent"><i class="icon-add"></i> Tambah Item</button>'
        }
      }
    });
    </script>
    <script>
      $('#drop').click(function(){
        $('#drop-items').remove()
        $('#drop-description').remove()
        $('#drop-quantity').remove()
        $('#drop-price').remove()
        $('#drop-amount').remove()
        $('#drop-delete').remove()
      })
    </script>
    <script>
      new TomSelect('#dropdown2',{
      sortField: 'text',
      hideSelected: false,
      plugins: {
        'dropdown_header': {
          title: 'Language'
        }
      }
    });
    </script>


<script>
  document.getElementById('add-row').addEventListener('click', function() {
    var tableBody = document.getElementById('table-body');
    var newRow = document.createElement('tr');
    newRow.innerHTML = `
    <td>
        <div class="field-wrapper m-0">
          <select name="item[]" style="border-radius:2px" class="form-control">
            <option value="txt">Text</option>
            <option value="md">Markdown</option>
            <option value="html">HTML</option>
            <option value="php">PHP</option>
            <option value="python">Python</option>
            <option value="java">Java</option>
            <option value="js" selected>JavaScript</option>
            <option value="ruby">Ruby</option>
            <option value="vhdl">VHDL</option>
            <option value="verilog">Verilog</option>
            <option value="csharp">C#</option>
          </select>
        </div>
      </td>
      <td>
        <div class="field-wrapper m-0">
          <input type="text" name="deskripsi[]" style="border-radius:2px" class="form-control">
        </div>
      </td>
      <td>
        <div class="field-wrapper m-0">
          <input type="number" name="kuantitas[]" style="border-radius:2px" class="form-control">
        </div>
      </td>
      <td>
        <div class="field-wrapper m-0">
          <input type="number" name="harga[]" style="border-radius:2px" class="form-control">
        </div>
      </td>
      <td>
        <div class="field-wrapper m-0">
          <input type="number" name="jumlah[]" style="border-radius:2px" class="form-control">
        </div>
      </td>
      <td>
        <div id="pajak-wrapper">
          <div class="field-wrapper mb-1 pajak-input-wrapper">
            <input type="number" name="pajak[]" style="border-radius:2px" class="form-control pajak-input">
          </div>
          <div class="add-pajak-wrapper mb-1">
            <button class="btn btn-light add-pajak">
              <i class="icon-plus"></i> Tambah Pajak
            </button>
          </div>
        </div>
      </td>
      <td>
        <div class="table-actions">
          <button class="btn btn-light delete-row">
            <i class="icon-trash-2"></i>
          </button>
        </div>
      </td>
    `;
    tableBody.appendChild(newRow);
  });

  document.addEventListener('click', function(e) {
    if (e.target.classList.contains('delete-row')) {
      var row = e.target.closest('tr');
      row.parentNode.removeChild(row);
    }

    if (e.target.classList.contains('add-pajak')) {
      var pajakWrapper = e.target.closest('#pajak-wrapper');
      var pajakInputWrapper = pajakWrapper.querySelector('.pajak-input-wrapper');
      var newPajakInputWrapper = pajakInputWrapper.cloneNode(true);
      newPajakInputWrapper.querySelector('.pajak-input').value = '';

      var addPajakWrapper = pajakWrapper.querySelector('.add-pajak-wrapper');
      addPajakWrapper.parentNode.insertBefore(newPajakInputWrapper, addPajakWrapper);
    }
  });

  function calculateTotal() {
    var jumlahInputs = document.querySelectorAll('input[name="jumlah[]"]');
    var subtotal = 0;

    jumlahInputs.forEach(function(input) {
      subtotal += parseFloat(input.value) || 0;
    });

    var diskonInput = document.getElementById('diskon-input');
    var diskon = parseFloat(diskonInput.value) || 0;
    var totalPajakInputs = document.querySelectorAll('input[name="pajak[]"]');
    var totalPajak = 0;

    totalPajakInputs.forEach(function(input) {
      totalPajak += parseFloat(input.value) || 0;
    });

    var total = subtotal + totalPajak - diskon;

    document.getElementById('subtotal').textContent = 'Rp.' + subtotal.toFixed(2);
    document.getElementById('diskon').textContent = 'Rp.' + diskon.toFixed(2);
    document.getElementById('total-pajak').textContent = 'Rp.' + totalPajak.toFixed(2);
    document.getElementById('total').textContent = 'Rp.' + total.toFixed(2);
  }

  var inputs = document.querySelectorAll('input[name="jumlah[]"], input[name="pajak[]"], #diskon-input');
  inputs.forEach(function(input) {
    input.addEventListener('input', calculateTotal);
  });
</script>
	</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:35 GMT -->
</html>