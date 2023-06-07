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
		<title>Unknown | Faktur Berulang</title>


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
		<link rel="stylesheet" href="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.css")}}" />
        <style>
        .yellow{
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #fbff00;
        }
        .badge-start {
            border-radius: 2px;
            padding: .35rem .5rem;
            min-width: 60px;
            background: #D8D7FF;
            color: #030179;
        }
         .badge-finish {
            border-radius: 2px;
            padding: .35rem .5rem;
            min-width: 60px;
            background: #D4FFCD;
            color: #0A6D01;
        }
			.text {
            text-align: center;
            color: #5e6973;
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
            border-bottom: 2px solid #333;
        }

        .empty-box:hover {
            height: 25px;
            border: 0px;
            border-bottom: 2px solid #333;
  		}
		 .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 160px;
            z-index: 1;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 10px;
            border-radius: 4px;
            right: 25px;
            bottom: -25px; /* Mengarahkan dropdown ke arah kiri */
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: block;
            padding: 5px 0;
            text-decoration: none;
            color: #333;
        }
            .searchcontainer{
        width:90%;
        font-size:20px;
        .icon-search{
            display:inline-block;
            margin-right:50px;
            color: rgba(255, 255, 255, 0.5);
        }
        .search{
            width:111%;
            display:inline-block;
            background-color: rgba(255, 255, 255, 0);
            border:0px;
            color:grey;
            font-size:16px;
            padding:10px 0px;
            padding-left:25px;
            border-bottom:1px solid grey;
            &:focus{
                outline: 0px;
                border-bottom:1px solid #ccc;
            }
        }
        }
        </style>

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
								<div class="cd-dropdown-wrapper">
									

								
								</div>
								<!-- Mega Menu End -->

								<!-- Search input group start -->
								
								<!-- Search input group end -->

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
						    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                                <!-- Card start -->
                                <div class="card">
                                    <div class="card-header">
                                        <div class="col-xl-6 col-lg-6 col-md-4 col-sm-4 col-6">
                                        <div class="card-title"><h3>Faktur Berulang<button type="button" style="border: none; background:transparent;">☆</button></h3></div></div>
                                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 col-6">
                                        <div class="graph-day-selection" role="group" style="margin-left: 58%">
                                            <a href="{{url('add_recurring_invoice')}}">
                                            <button type="button" class="btn active" style="background: transparent">Tambah Faktur Berulang</button>
                                            </a>
                                        </div>
                                        </div>
                                        <div class="dropdown icon-dots-three-vertical">
                                            <span></span>
                                            <div class="dropdown-content">
                                                <a href="#">
                                                <button type="button" style="border: none; background-color: white; color:#333; background:transparent" class="icon-download" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
                                                    Impor
                                                </button>
                                                </a>
                                                <a href="#" class="icon-folder" style="color: #333">
                                                <button type="button" style="border: none; background-color: white; color:#333; background:transparent"> Ekspor</button>
                                                </a>
                                            </div>
                                        </div>     
                                    </div>
                                    <div class="card-body">
                                   
                                    <!-- Row end -->
                                    <div class="d-flex">
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box1">
                                            <div class="hr-switch">
                                                <a href="{{ route('invoice') }}">
                                                    <div class="empty-box1 ">
                                                        <h6 class="">Faktur</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6 box2">
                                            <div class="hr-switch">
                                                <a href="{{ route('recurring_invoice') }}">
                                                    <div class="empty-box2 active">
                                                        <h6 class="">Rutin</h6>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="content">
                                            <div class="searchcontainer">
                                              <i class="icon-search"></i><input class="search " type="text" placeholder="Cari atau seleksi hasil.." style="
                                              margin-bottom: 2%; font-size:10pt "/>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover caption-top">
                                                <thead>
                                                <tr>
                                                    <th scope="col"> <input type="checkbox" id="select-all-checkbox"> </th>
                                                    <th scope="col">Tanggal Mulai</th>
                                                    <th scope="col">Isu Terakhir</th>
                                                    <th scope="col">Pelanggan</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Frekuensi</th>
                                                    <th scope="col">Durasi</th>
                                                    <th scope="col">Jumlah</th>
                                                    <th scope="col">Aksi</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <!-- Data 1 -->
                                                <tr class="table-row">
                                                    <td><input type="checkbox" class="other-checkbox"></td>
                                                    <td>12 mei 2023</td>
                                                    <td>14 mei 2023</td>
                                                    <td>koirul</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <i class="yellow">&emsp; Deposit</i>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge-start">Aktif</span></td>
                                                    <td>Bulanan</td>
                                                    <td>24 mei 2023</td>
                                                    <td>91.000.000,00</td>
                                                    <td>
                                                       <div class="menu-icons" style="font-size: 15px;">
                                                            <a href="{{ url('edit_supplier') }}" class="menu-icon icon-edit-2"></a>
                                                            <a href="{{url('delete_transfer')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleterole"></a>
                                                            <a href="{{ url ('details_recurring')}}" class="menu-icon icon-eye1"></a>
                                                            <div class="dropdown icon-dots-two-vertical">
                                                                <span>
                                                                <div class="dropdown-content">
                                                                    <a href="#">
                                                                    <button type="button" style="border: none; background:none; color:#333; background:transparent" data-bs-toggle="modal" data-bs-target="#payment" class="icon-attach_money">
                                                                            Bayar
                                                                    </button>
                                                                    </a>
                                                                    <a href="#">
                                                                        <button type="button" style="border: none; background-color: white; color:#333; background:transparent" class="icon-printer">
                                                                            Cetak
                                                                        </button>
                                                                    </a>
                                                                    <a href="#" class="icon-x-circle" style="color: #333">
                                                                        <button type="button" style="border: none; background-color: white; color:#333; background:transparent">
                                                                            Batal</button>
                                                                    </a>
                                                                </div>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </td>	
                                                </tr>
                                            
                                                <!-- Data 2 -->
                                                <tr class="table-row">
                                                    <td><input type="checkbox" class="other-checkbox"></td>
                                                    <td>12 mei 2023</td>
                                                    <td>12 mei 2023</td>
                                                    <td>choirul</td>
                                                    <td>
                                                        <div class="d-flex">
                                                        <i class="yellow">&emsp; Deposit</i>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge-finish"> Selesai</span></td>
                                                    <td>Bulanan</td>
                                                    <td>25 mei 2023</td>
                                                    <td>80.000.000,00</td>
                                                    <td>
                                                       <div class="menu-icons" style="font-size: 15px;">
                                                            <a href="{{ url('edit_supplier') }}" class="menu-icon icon-edit-2"></a>
                                                            <a href="{{url('delete_transfer')}}" class="menu-icon icon-trash" data-bs-toggle="modal" data-bs-target="#deleterole"></a>
                                                            <a href="#" class="menu-icon icon-eye1"></a>
                                                            <div class="dropdown icon-dots-two-vertical">
                                                                <span>
                                                                <div class="dropdown-content">
                                                                    <a href="#">
                                                                    <button type="button" style="border: none; background:none; color:#333; background:transparent" data-bs-toggle="modal" data-bs-target="#payment" class="icon-attach_money">
                                                                            Bayar
                                                                    </button>
                                                                    </a>
                                                                    <a href="#">
                                                                        <button type="button" style="border: none; background-color: white; color:#333; background:transparent" class="icon-printer">
                                                                            Cetak
                                                                        </button>
                                                                    </a>
                                                                    <a href="#" class="icon-x-circle" style="color: #333">
                                                                        <button type="button" style="border: none; background-color: white; color:#333; background:transparent">
                                                                            Batal</button>
                                                                    </a>
                                                                </div>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </td>	
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                                        <!-- Card start -->
                                                    </div>
                                                  <!-- Card start -->
                                <div class="card">
                                    <div class="card-body col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" >

                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination" style="float: right;">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                            </ul>
                                        </nav>

                                    </div>
                                </div>
                    <!-- Card end -->
                                <!-- Card end -->
                                <div class="modal fade" id="payment" tabindex="-1" aria-labelledby="paymentTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content" style="margin-top: -10%">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="paymentTitle">Pembayaran</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="field-wrapper">
                                                        <label for="subjudul" class="field-label">Kategori<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control datepicker" style="border-radius: 2px">
                                                    </div>
                                                    <div class="field-wrapper">
                                                        <label for="subjudul" class="field-label">Jumlah<span class="text-danger">*</span></label>
                                                        <input type="number" class="form-control datepicker" style="border-radius: 2px">
                                                    </div>
                                                    <div class="field-wrapper">
                                                        <label for="subjudul" class="field-label">Metode Pembayaran<span class="text-danger">*</span></label>
                                                        <select class="select-single js-states" title="Select Product Category" data-live-search="true" style="border-radius: 2px">
                                                            <option>Cash</option>
                                                            <option>Transfer</option>
                                                        </select>
                                                    </div>
                                                    <div class="field-wrapper">
                                                        <label for="subjudul" class="field-label">Akun<span class="text-danger">*</span></label>
                                                        <select class="select-single js-states" title="Select Product Category" data-live-search="true" style="border-radius: 2px">
                                                            <option>Adi</option>
                                                            <option>Rudi</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="text-white" style="background-color:rgb(255, 0, 0); border:none; border-radius:2px; width:20%; height:25px; color:white" data-bs-dismiss="modal">Batal</button>
                                                <button type="button" class="text-white" style="background-color: #55be0e; border:none; border-radius:2px; width:30%; height:25px; color:white">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div>

										<!-- Modal start -->
										<div class="modal fade" id="exampleModalCenteredScrollable" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Impor Faktur</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<div id="dropzone">
															<form action="https://www.kodingwife.com/upload" class="dropzone needsclick dz-clickable" id="demo-upload">

																<div class="dz-message needsclick">
																	<button type="button" class="dz-button" style="border:none; margin-right:20%; margin-left:20%; margin-top: 12%">Pilih berkas di sini untuk mengunggah.</button><br>
																</div>

															</form>
														</div>
													</div>
													<div class="modal-footer" style="margin-top:2%">
														<a href="" onclick="window.location.reload()" style="margin-right: 2%" data-bs-dismiss="modal">Batal</a>
														<button type="button" class="btn btn-primary" style="border-radius: 2px">Upload</button>
													</div>
												</div>
											</div>
										</div>
										<!-- Modal end -->
                                          <!-- Modal start -->
                                <div class="modal fade" id="deleterole" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleterole" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content" style="padding: 0px">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Hapus Faktur Berulang</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Anda Yakin Ingin Menghapus Faktur Berulang Ini?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hapus</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal end -->
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
		<script src="{{ asset ("Gmbslagi/vendor/dropzone/dropzone.min.js")}}"></script>
        
		<!-- Main Js Required -->
		<script src="{{ asset ("Gmbslagi/js/main.js")}}"></script>
		<script>
			// Ambil elemen-elemen yang diperlukan
		var selectAllCheckbox = document.getElementById('select-all-checkbox');
		var otherCheckboxes = document.getElementsByClassName('other-checkbox');

		// Tambahkan event listener pada checkbox "Select All"
		selectAllCheckbox.addEventListener('change', function() {
		// Periksa apakah checkbox "Select All" dicentang atau tidak
		var isChecked = selectAllCheckbox.checked;
		
		// Ubah status checked pada checkbox lainnya sesuai dengan checkbox "Select All"
		for (var i = 0; i < otherCheckboxes.length; i++) {
			otherCheckboxes[i].checked = isChecked;
		}
		});

		// Tambahkan event listener pada checkbox lainnya
		for (var i = 0; i < otherCheckboxes.length; i++) {
		otherCheckboxes[i].addEventListener('change', function() {
			// Periksa apakah semua checkbox lainnya telah dicentang
			var allChecked = true;
			for (var j = 0; j < otherCheckboxes.length; j++) {
			if (!otherCheckboxes[j].checked) {
				allChecked = false;
				break;
			}
			}
			
			// Perbarui status checked pada checkbox "Select All" sesuai dengan kondisi di atas
			selectAllCheckbox.checked = allChecked;
		});
		}

		</script>

	</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:54 GMT -->
</html>