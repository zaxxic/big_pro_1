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
								<div class="cd-dropdown-wrapper">
									<a class="cd-dropdown-trigger" href="#0"><i class="icon-menu menu-icon"></i><span class="menu-text">Megamenu</span></a>
									<nav class="cd-dropdown">

										<ul class="cd-dropdown-content">

											<li class="has-children">
												<a href="#">Main Pages</a>
												<ul class="cd-secondary-dropdown is-hidden">
													<li class="has-children">
														<a href="#">Dashboards</a>
														<ul class="is-hidden">
															<li>
																<a href="reports.html">Reports</a>
															</li>
															<li>
																<a href="saas.html">Saas</a>
															</li>
															<li>
																<a href="sales.html">Sales</a>
															</li>
															<li>
																<a href="index.html">Admin</a>
															</li>
															<li>
																<a href="analytics.html">Analytics</a>
															</li>
															<li>
																<a href="crm.html">CRM</a>
															</li>
															<li>
																<a href="consulting.html">Consulting</a>
															</li>
														</ul>
													</li>
													<li class="has-children">
														<a href="#">Layouts</a>
														<ul class="is-hidden">
															<li>
																<a href="starter-page.html">Starter Page</a>
															</li>
															<li>
																<a href="layout-full-screen.html">Full Screen</a>
															</li>
															<li>
																<a href="layout-search.html">Global Search</a>
															</li>
															<li>
																<a href="layout-megamenu.html">Megamenu</a>
															</li>
															<li>
																<a href="layout-bradcrumb.html">Breadcrumbs</a>
															</li>
															<li>
																<a href="layout-scroll-cards.html">Scroll Cards</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>

											<li class="has-children">
												<a href="#">Product &amp; Calendars</a>

												<ul class="cd-secondary-dropdown is-hidden">
													<li class="has-children">
														<a href="#">Product</a>
														<ul class="is-hidden">
															<li>
																<a href="products.html">Products Grid</a>
															</li>
															<li>
																<a href="products-list.html">Products List</a>
															</li>
															<li>
																<a href="add-product.html">Add Product</a>
															</li>
															<li>
																<a href="orders.html">Orders</a>
															</li>
															<li>
																<a href="customers-list.html">Customers</a>
															</li>
															<li>
																<a href="products-reviews.html">Reviews</a>
															</li>
														</ul>
													</li>

													<li class="has-children">
														<a href="#">Calendars</a>
														<ul class="is-hidden">
															<li>
																<a href="calendar-daygrid-view.html">Daygrid View</a>
															</li>
															<li>
																<a href="calendar-list-view.html">List View</a>
															</li>
															<li>
																<a href="calendar-external-dragging.html">Draggable</a>
															</li>
															<li>
																<a href="calendar-google-view.html">Google View</a>
															</li>
															<li>
																<a href="calendar-selectable.html">Selectable</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>

											<li class="has-children">
												<a href="#">Forms</a>

												<ul class="cd-secondary-dropdown is-hidden">

													<li class="has-children">
														<a href="#">Form Layouts</a>
														<ul class="is-hidden">
															<li>
																<a href="forms-layout-one.html">Default Layout</a>
															</li>
															<li>
																<a href="forms-layout-two.html">Layout Sections</a>
															</li>
															<li>
																<a href="forms-layout-three.html">Simple Form Layout</a>
															</li>
															<li>
																<a href="forms-layout-four.html">Select 2 Tags and Mask</a>
															</li>
															<li>
																<a href="forms-layout-five.html">Horizontal Form Layout</a>
															</li>
															<li>
																<a href="forms-layout-six.html">Layout Six with Tabs</a>
															</li>
														</ul>
													</li>

													<li class="has-children">
														<a href="#">Forms</a>
														<ul class="is-hidden">
															<li>
																<a href="forms-inputs.html">Form Inputs</a>
															</li>
															<li>
																<a href="forms-input-groups.html">Input Groups</a>
															</li>
															<li>
																<a href="forms-checkbox-radio.html">Checkbox &amp; Radios</a>
															</li>
															<li>
																<a href="forms-validation.html">Form Validation</a>
															</li>
															<li>
																<a href="forms-dropzone.html">Dropzone</a>
															</li>
															<li>
																<a href="forms-bs-select.html">Select 2 Dropdowns</a>
															</li>
															<li>
																<a href="forms-date-time-picker.html">Date Time Picker</a>
															</li>
															<li>
																<a href="forms-input-mask.html">Input Mask</a>
															</li>
															<li>
																<a href="forms-input-range.html">Input Range</a>
															</li>
															<li>
																<a href="forms-editor.html">WYSIWYG Editor</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>

											<li class="has-children">
												<a href="#">Pages &amp; Components</a>

												<ul class="cd-secondary-dropdown is-hidden">

													<li class="has-children">
														<a href="#">Pages</a>
														<ul class="is-hidden">
															<li>
																<a href="chat.html">Chat</a>
															</li>
															<li>
																<a href="tasks.html">Tasks</a>
															</li>
															<li>
																<a href="create-invoice.html">Create Invoice</a>
															</li>
															<li>
																<a href="view-invoice.html">View Invoice</a>
															</li>
															<li>
																<a href="documents.html">Documents</a>
															</li>
															<li>
																<a href="faq.html">Faq's</a>
															</li>
															<li>
																<a href="contacts.html">Contacts</a>
															</li>
															<li>
																<a href="pricing.html">Pricing</a>
															</li>
															<li>
																<a href="gallery-tiles.html">Gallery Tiles</a>
															</li>
															<li>
																<a href="gallery.html">Gallery</a>
															</li>
															<li>
																<a href="icons.html">Icons</a>
															</li>
															<li>
																<a href="timeline.html">Timeline</a>
															</li>
															<li>
																<a href="search-results.html">Search Results</a>
															</li>
															<li>
																<a href="account-settings.html">Account Settings</a>
															</li>
															<li>
																<a href="user-profile.html">User Profile</a>
															</li>
														</ul>
													</li>

													<li class="has-children">
														<a href="#">Components</a>
														<ul class="is-hidden">
															<li>
																<a href="accordions.html">Accordions</a>
															</li>
															<li>
																<a href="alerts.html">Alerts</a>
															</li>
															<li>
																<a href="buttons.html">Buttons</a>
															</li>
															<li>
																<a href="badges.html">Badges</a>
															</li>
															<li>
																<a href="cards.html">Cards</a>
															</li>
															<li>
																<a href="carousel.html">Carousel</a>
															</li>
															<li>
																<a href="list-group.html">List group</a>
															</li>
															<li>
																<a href="modals.html">Modal</a>
															</li>
															<li>
																<a href="paginations.html">Paginations</a>
															</li>
															<li>
																<a href="popovers.html">Popovers</a>
															</li>
															<li>
																<a href="progress.html">Progress</a>
															</li>
															<li>
																<a href="spinners.html">Spinners</a>
															</li>
															<li>
																<a href="tabs.html">Tabs</a>
															</li>
															<li>
																<a href="toasts.html">Toasts</a>
															</li>
															<li>
																<a href="tooltips.html">Tooltips</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>

											<li class="has-children">
												<a href="#">Graphs &amp; Tables</a>

												<ul class="cd-secondary-dropdown is-hidden">

													<li class="has-children">
														<a href="#">Graphs</a>
														<ul class="is-hidden">
															<li>
																<a href="apex-graphs.html">Apex Graphs</a>
															</li>
															<li>
																<a href="morris-graphs.html">Morris Graphs</a>
															</li>
															<li>
																<a href="vector-maps.html">Vector Maps</a>
															</li>
														</ul>
													</li>

													<li class="has-children">
														<a href="#">Tables</a>
														<ul class="is-hidden">
															<li>
																<a href="bootstrap-tables.html">Bootstrap Tables</a>
															</li>
															<li>
																<a href="custom-tables.html">Custom Tables</a>
															</li>
															<li>
																<a href="data-tables.html">Data Tables</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											
											<li>
												<a href="account-settings.html">Account Settings</a>
											</li>
											<li>
												<a href="login.html">Logout</a>
											</li>
											<li>
												<a href="error-option2.html">Error</a>
											</li>
										</ul>
										
									</nav>
								</div>
								<!-- Mega Menu End -->

								<!-- Search input group start -->
								<div class="ui fluid category search">
									<div class="ui icon input">
										<input class="prompt" type="text" placeholder="Search">
										<i class="search icon icon-search1"></i>
									</div>
									<div class="results"></div>
								</div>
								<!-- Search input group end -->

							</div>
							<!-- Search container end -->

						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">

							<!-- Header actions start -->
							<ul class="header-actions">
								<li class="dropdown">
									<a href="#" id="taskss" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-check-square"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="taskss">
										<div class="dropdown-menu-header">
											Tasks (7/10)
										</div>
										<div class="customScroll">
											<ul class="activity">
												<li class="activity-list">
													<div class="detail-info">
														<p class="date">Today</p>
														<p class="info">Messages accepted with attachments</p>
													</div>
												</li>
												<li class="activity-list danger">
													<div class="detail-info">
														<p class="date">Today</p>
														<p class="info">Send email notifications of subscriptions and deletions to list owner</p>
													</div>
												</li>
												<li class="activity-list success">
													<div class="detail-info">
														<p class="date">Yesterday</p>
														<p class="info">Required change logs activity reports</p>
													</div>
												</li>
												<li class="activity-list warning">
													<div class="detail-info">
													<p class="date">2 Days Ago</p>
														<p class="info">Strategic partnership plan</p>
													</div>
												</li>
												<li class="activity-list">
													<div class="detail-info">
														<p class="date">2 days ago</p>
														<p class="info">Send email notifications of subscriptions and deletions to list owner</p>
													</div>
												</li>
												<li class="activity-list danger">
													<div class="detail-info">
														<p class="date">3 days ago</p>
														<p class="info">Required change logs activity reports</p>
													</div>
												</li>
												<li class="activity-list success">
													<div class="detail-info">
													<p class="date">7 days ago</p>
														<p class="info">Strategic partnership plan</p>
													</div>
												</li>
												<li class="activity-list">
													<div class="detail-info">
														<p class="date">2 weeks ago</p>
														<p class="info">Required change logs activity reports</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown">
									<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-alert-triangle"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="notifications">
										<div class="dropdown-menu-header">
											Notifications (7)
										</div>
										<div class="customScroll">
											<ul class="header-notifications">
												<li>
													<a href="#">
														<div class="user-img online">
															<img src="img/user6.png" alt="User">
														</div>
														<div class="details">
															<div class="user-title">Larkyn</div>
															<div class="noti-details">Check out every table in detail.</div>
															<div class="noti-date">April 25, 04:00 pm</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="user-img busy">
															<img src="img/user10.png" alt="User">
														</div>
														<div class="details">
															<div class="user-title">Braxten</div>
															<div class="noti-details">Approved new design.</div>
															<div class="noti-date">April 10, 12:00 am</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="user-img away">
															<img src="img/user21.png" alt="User">
														</div>
														<div class="details">
															<div class="user-title">Maria</div>
															<div class="noti-details">Membership has been ended.</div>
															<div class="noti-date">March 20, 07:30 pm</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="user-img busy">
															<img src="img/user15.png" alt="User">
														</div>
														<div class="details">
															<div class="user-title">Alex</div>
															<div class="noti-details">Design Review.</div>
															<div class="noti-date">April 18, 09:30 am</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="user-img online">
															<img src="img/user5.png" alt="User">
														</div>
														<div class="details">
															<div class="user-title">Sunny</div>
															<div class="noti-details">UI Discussion</div>
															<div class="noti-date">April 21, 05:00 pm</div>
														</div>
													</a>
												</li>												
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown">
									<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
										<span class="avatar">
											<img src="{{ asset ("Gmbslagi/img/user.svg")}}" alt="User Avatar">
											<span class="status busy"></span>
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
										<div class="header-profile-actions">
											<a href="user-profile.html"><i class="icon-user1"></i>Profile</a>
											<a href="account-settings.html"><i class="icon-settings1"></i>Settings</a>
											<a href="forgot-password.html"><i class="icon-log-out1"></i>Logout</a>
										</div>
									</div>
								</li>
							</ul>
							<!-- Header actions end -->

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
								<div class="card" style="overflow: hidden">
									<div class="card-header">
										<div class="card-title"><h3>Tambah Pemasok<button type="button" style="border: none; background:none;">☆</button></h3></div>
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
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" placeholder="Masukan Nama">
													<div class="field-placeholder">Nama <span class="text-danger">*</span></div>
													<div class="form-text">
														Silakan masukkan nama lengkap Anda.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="email" placeholder="Masukan Email">
													<div class="field-placeholder">Email <span class="text-danger">*</span></div>
													<div class="form-text">
														Kami tidak akan pernah membagikan email Anda kepada siapa pun.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" placeholder="Masukan Situs Web">
													<div class="field-placeholder">Situs Web</div>
												</div>
												<!-- Field wrapper end -->
												
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" placeholder="Masukan Refrensi">
													<div class="field-placeholder">Refrensi</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="number" placeholder="Masukan Nomor Telepon">
													<div class="field-placeholder">Telepon</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="file">
													<div class="field-placeholder">Gambar</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 1%;">
												
												<div style="border-bottom: solid grey 1px;margin-bottom:1%">
													<h6>Penagihan</h6>
													<p>Nomor pajak muncul di setiap tagihan yang diterbitkan untuk Anda. Mata uang yang dipilih menjadi mata uang bawaan untuk penyedia ini.</p>
												</div>

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="number" placeholder="Masukan NPWP">
													<div class="field-placeholder">NPWP</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<select class="select-single js-states" title="Select Product Category" data-live-search="true">
														<option>Rupiah Indonesia (IDR)</option>
														<option>Dolar Amerika Serikat (USD)</option>
														<option>Euro (EUR)</option>
														<option>Yen Jepang (JPY)</option>
														<option>Pound Inggris (GBP)</option>
														<option>Dolar Australia (AUD)</option>
														<option>Dolar Kanada (CAD)</option>
														<option>Franc Swiss (CHF)</option>
														<option>Dolar Hong Kong (HKD)</option>
														<option>Won Korea Selatan (KRW)</option>
														<option>Yuan Tiongkok (CNY)</option>
														<option>Rupee India (INR)</option>
														<option>Rubel Rusia (RUB)</option>
														<option>Real Brasil (BRL)</option>
														<option>Peso Meksiko (MXN)</option>
														<option>Rand Afrika Selatan (ZAR)</option>
													</select>
													<div class="field-placeholder">Mata Uang</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<textarea class="form-control" rows="2" placeholder="Masukan Alamat"></textarea>
													<div class="field-placeholder">Alamat <span class="text-danger">*</span></div>
													<div class="form-text">
														Silakan masukkan Alamat lengkap Anda.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" placeholder="Masukan Kota">
													<div class="field-placeholder">Kota</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="number" placeholder="Masukan Kode Pos">
													<div class="field-placeholder">Kode Pos</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" placeholder="Masukan Provinsi">
													<div class="field-placeholder">Provinsi</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" placeholder="Masukan Negara">
													<div class="field-placeholder">Negara</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-left: 81%">
												<a href="#" style="margin-right: 4%">Batal</a>
												<button class="btn btn-primary" style="border-radius: 20px">Simpan</button>
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

	</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/forms-layout-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->
</html>