<nav class="sidebar-wrapper">

	<!-- Sidebar content start -->
	<div class="sidebar-tabs">

		<!-- Tabs nav start -->
		<div class="nav" role="tablist" aria-orientation="vertical">
			<a id="profile-tab" data-bs-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false" class="logo">
				<img src="{{ asset('Gmbslagi/img/unknown.jpg') }}" width="50" height="50" style="border-radius: 50%;" class="mb-3">
			</a>

			<a class="current-page nav-link " id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">
				<i class="icon-grid"></i>
				<span class="nav-link-text">Dashboards</span>
			</a>
			<a class="nav-link" id="product-tab" data-bs-toggle="tab" href="#tab-product" role="tab" aria-controls="tab-product" aria-selected="false">
				<i class="icon-settings1"></i>
				<span class="nav-link-text">Sistem</span>
			</a>
			<a class="nav-link" id="pages-tab" data-bs-toggle="tab" href="#tab-pages" role="tab" aria-controls="tab-pages" aria-selected="false">
				<i class="icon-notifications_none"></i>
				<span class="nav-link-text">Notifikasi</span>
			</a>
			<div class="mt-5">
				<a class="nav-link">
					<i class="icon-settings1"></i>
					<span class="nav-link-text">Settings</span>
				</a>
			</div>
		</div>


		<!-- Tabs nav end -->

		<!-- Tabs content start -->
		<div class="tab-content">

			<!-- Chat tab -->
			<div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">

				<!-- Tab content header start -->
				<div class="tab-pane-header">
					<a href="#" class="logo">
						<img src="{{ asset('Gmbslagi/img/unknown.jpg') }}" style="border-radius: 50%;" width="50" height="50">
					</a>
					&emsp;Unknown
				</div>
				<!-- Tab content header end -->

				<!-- Sidebar menu starts -->
				<div class="sidebarMenuScroll mt-2">
					<div class="sidebar-menu active">
						<ul>
							<li>
								<a href="{{ url('dashboard')}}" class="sidebar-menu {{ request()->routeIs('dashboard') ? 'current-page' : '' }}" aria-selected="false">
									<i class="icon-home2" style="font-size: 19px;"></i><span>&emsp;Dashboard</span>
								</a>
							</li>


							<li class="{{ Request::is('item-index') ? 'active' : '' }}">
								<a href="{{ route('item-index') }}">
								  <i class="icon-download1" style="font-size: 19px;"></i><span>&emsp;Item</span>
								</a>
							  </li>
							{{-- <li class="mt-3">
								<a href="{{url('pembelian_pemasok')}}" class="{{ request()->routeIs('pembelian_pemasok') ? 'current-page' : '' }}" aria-selected="false">
									<i class="icon-download1" style="font-size: 19px;"></i>
									<span>&emsp;Barang</span>
								</a>
							</li> --}}
							<li class="mt-3 ">
								<a href="#" class="dropdown-btn {{ request()->routeIs('') ? 'current-page' : '' }}"><i class="icon-tag1" style=" font-size: 19px;"></i><span>&emsp;Penjualan</span><i class="icon-chevron-down1 droprow "></i></a>
								<ul class="dropdown-container">
									<li class="mt-2"><a href="{{ route('invoice') }}"><span style="margin-left: 20px;">&emsp;Faktur</span></a></li>
									<li class="mt-2"><a href="{{ route('costumers') }}"><span style="margin-left: 20px;">&emsp;Pelanggan</span></a></li>
								</ul>
							</li>
							<li class="mt-3 ">
								<a href="#" class="dropdown-btn"><i class="icon-shopping-cart1" style=" font-size: 19px;"></i><span>&emsp;Pembelian</span><i class="icon-chevron-down1 droprow"></i></a>
								<ul class="dropdown-container">
									<li class="mt-2"><a href="" ><span style="margin-left: 20px;">&emsp;Tagihan</span></a></li>
									<li class="mt-2"><a href="{{url('supplier')}}"><span style="margin-left: 20px;">&emsp;Pemasok</span></a></li>
								</ul>
							</li>
							<li class="mt-3">
								<a href="#" class="dropdown-btn {{ request()->routeIs('transactions') || request()->routeIs('transfer') || request()->routeIs('add_account') || request()->routeIs('account') ? 'current-page' : '' }}"><i class="icon-attach_money" style="font-size: 19px;"></i><span>&emsp;Perbankan</span><i class="icon-chevron-down1 droprow"></i></a>
								<ul class="dropdown-container">
									<li class="mt-2"><a href="{{url('account')}}" class="{{ request()->routeIs('account') ? 'drop-icon' : '' }}"><span style="margin-left: 20px;"><i class="icon-stop"></i>&emsp;Akun</span></a></li>
									<li class="mt-2"><a href="{{url('transactions')}}" class="{{ request()->routeIs('transactions') ? 'drop-icon' : '' }}"><span style="margin-left: 20px;"><i class="icon-stop"></i>&emsp;Transaksi</a></li>
									<li class="mt-2"><a href="{{url('transfer')}}" class="{{ request()->routeIs('transfer') ? 'drop-icon' : '' }}"><span style="margin-left: 20px;"><i class="icon-stop"></i>&emsp;Transfer</span></a></li>
								</ul>
							</li>


							<li class="mt-3">
								<a href="{{ route('report') }}" aria-selected="false"><i class="icon-file-text" style=" font-size: 19px;"></i><span>&emsp;Laporan</span></a>
							</li>
							<li class="mt-3">
								<a href="{{ route('calendar') }}" aria-selected="false"><i class="icon-calendar1" style=" font-size: 19px;"></i><span>&emsp;Kalender</span></a>
							</li>
						</ul>

					</div>
				</div>


			</div>

			<!-- Pages tab -->
			<div class="tab-pane fade" id="tab-product" role="tabpanel" aria-labelledby="product-tab">

				<!-- Tab content header start -->
				<div class="tab-pane-header">
					<a href="#" class="logo">
						<img src="{{ asset('Gmbslagi/img/unknown.jpg') }}" style="border-radius: 50%;" width="50" height="50">
					</a>
					&emsp;Unknown
				</div>
				<!-- Tab content header end -->

				<!-- Sidebar menu starts -->
				<div class="sidebarMenuScroll mt-2">
					<div class="sidebar-menu active">
						<ul class="active">

							<li class="active">
								<a href="{{ route('company')}}" class="current-page"><i class="icon-briefcase" style=" font-size: 19px;"></i><span>&emsp;Perusahaan</span></a>
							</li>

							<li class="mt-3 active">
								<a href="{{ route('setting-invoice')}}"><i class="icon-file " style=" font-size: 19px;"></i><span>&emsp;Faktur</span></a>
							</li>
							<li class="mt-3 active">
								<a href="{{ route('editemail')}}"><i class="icon-mail " style=" font-size: 19px;"></i><span>&emsp;Surel</span></a>
							</li>
							<li class="mt-3" active>
								<a href="{{ route('index-category')}}"><i class="icon-server " style=" font-size: 19px;"></i><span>&emsp;Kategori</span></a>
							</li>
							<!-- <li class="dropdown">
								<a href="#" class="pem-btn"> Pembelian <span class="fas fa-caret-down first"></span></a>
								<ul class="pem-menu">
									<li><a href="#">Tagihan </a></li>
									<li><a href="#">Pelanggan</a></li>
								</ul>
							</li>	 -->
							<li class="mt-3">
								<a href="{{ route('currency') }}"><i class="icon-local_atm" style=" font-size: 19px;"></i><span>&emsp;Mata Uang</span></a>
							</li>
							<li class="mt-3">
								<a href="{{ route('tax') }}"><i class="icon-line-graph" style=" font-size: 19px;"></i><span>&emsp;Pajak</span></a>
							</li>
							
						</ul>

					</div>
				</div>
				<!-- Sidebar menu ends -->



			</div>

			<!-- Pages tab -->
			<div class="tab-pane fade" id="tab-profile" role="tabpanel" aria-labelledby="profile-tab">

				<!-- Tab content header start -->
				<div class="tab-pane-header">
					<a href="#" class="logo">
						<img src="{{ asset('Gmbslagi/img/unknown.jpg') }}" style="border-radius: 50%;" width="50" height="50">
					</a>
					&emsp;Trisqi GTG
				</div>
				<!-- Tab content header end -->

				<!-- Sidebar menu starts -->
				<div class="sidebarMenuScroll mt-2">
					<div class="sidebar-menu">
						<ul>
							<li>
								<a href="index.html" class="current-page"><i class="icon-user1" style=" font-size: 19px;"></i><span>&emsp;Profil</span></a>
							</li>
							<li class="mt-3">
								<a href="analytics.html"><i class="icon-users" style=" font-size: 19px;"></i><span>&emsp;Pengguna</span></a>
							</li>
							<li class="mt-3">
								<a href="{{url('role')}}"><i class="icon-pocket" style=" font-size: 19px;"></i><span>&emsp;Peran</span></a>
							</li>
							<li class="mt-3">
								<a href="analytics.html"><i class="icon-power_settings_new" style=" font-size: 19px;"></i><span>&emsp;Logout</span></a>
							</li>
						</ul>

					</div>
				</div>
				<!-- Sidebar menu ends -->



			</div>


			<!-- Pages tab -->
			<div class="tab-pane fade" id="tab-pages" role="tabpanel" aria-labelledby="pages-tab">

				<!-- Tab content header start -->
				<div class="tab-pane-header mt-2 ">
					<div class="d-flex">
						<i class="icon-notifications_none" style="font-size: 25px;"></i>
						&emsp;Notifikasi
					</div>
					<hr class="my-hr">
					<div style="margin-left: 184px;">
						<i class="icon-done_all"></i>
					</div>

				</div>
				<!-- Tab content header end -->



				<!-- Sidebar menu starts -->
				<div class="sidebarMenuScroll">
					<div class="sidebar-menu">
						<ul style="margin-top: -25px;">
							<li>
								<div class="d-flex">
									<a href="#">Transfer berhasil
										Sudah Selesai
										transaksi di lakukan dari dava ke trisqi dengan nominal Rp50.000.000</a>
									<div class="mb-2">
										<a href=""><i class="icon-check-circle"></i></a>
									</div>
								</div>
							</li>
							<li class="mt-3">
								<a href="{{url('icons')}}" class="{{ request()->routeIs('icons') ? 'current-page' : '' }}">Icons</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Sidebar menu ends -->



			</div>

			<!-- Forms tab -->
			<div class="tab-pane fade" id="tab-forms" role="tabpanel" aria-labelledby="forms-tab">

				<!-- Tab content header start -->
				<div class="tab-pane-header">
					Forms
				</div>
				<!-- Tab content header end -->

				<!-- Sidebar menu starts -->
				<div class="sidebarMenuScroll">
					<div class="sidebar-menu">
						<ul>
							<li class="list-heading">Form Layouts</li>
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
						<ul>
							<li class="list-heading">Form Fields</li>
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
						</ul>
						<ul>
							<li class="list-heading">Plugins</li>
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
					</div>
				</div>
				<!-- Sidebar menu ends -->

				<!-- Sidebar actions starts -->
				<div class="sidebar-actions">
					<div class="support-tile red">
						<i class="icon-mail"></i> Inbox Full
					</div>
				</div>
				<!-- Sidebar actions ends -->

			</div>

			<!-- Components tab -->
			<div class="tab-pane fade" id="tab-components" role="tabpanel" aria-labelledby="components-tab">

				<!-- Tab content header start -->
				<div class="tab-pane-header">
					Components
				</div>
				<!-- Tab content header end -->

				<!-- Sidebar menu starts -->
				<div class="sidebarMenuScroll">
					<div class="sidebar-menu">
						<ul>
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
					</div>
				</div>
				<!-- Sidebar menu ends -->

				<!-- Sidebar actions starts -->
				<div class="sidebar-actions">
					<div class="support-tile yellow">
						<i class="icon-arrow-down-circle"></i><a href="#">Download Reports</a>
					</div>
				</div>
				<!-- Sidebar actions ends -->

			</div>

			<!-- Graphs tab -->
			<div class="tab-pane fade" id="tab-graphs" role="tabpanel" aria-labelledby="graphs-tab">

				<!-- Tab content header start -->
				<div class="tab-pane-header">
					Graphs &amp; Tables
				</div>
				<!-- Tab content header end -->

				<!-- Sidebar menu starts -->
				<div class="sidebarMenuScroll">
					<div class="sidebar-menu">
						<ul>
							<li class="list-heading">Graphs</li>
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

						<ul>
							<li class="list-heading">Tables</li>
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
					</div>
				</div>
				<!-- Sidebar menu ends -->

				<!-- Sidebar actions starts -->
				<div class="sidebar-actions">
					<div class="support-tile pink">
						<i class="icon-align-right1"></i> RTL Support
					</div>
				</div>
				<!-- Sidebar actions ends -->

			</div>

			<!-- Authentication tab -->
			<div class="tab-pane fade" id="tab-authentication" role="tabpanel" aria-labelledby="authentication-tab">

				<!-- Tab content header start -->
				<div class="tab-pane-header">
					Authentication
				</div>
				<!-- Tab content header end -->

				<!-- Sidebar menu starts -->
				<div class="sidebarMenuScroll">
					<div class="sidebar-menu">
						<ul>
							<li>
								<a href="login.html">Login</a>
							</li>
							<li>
								<a href="signup.html">Signup</a>
							</li>
							<li>
								<a href="forgot-password.html">Forgot Password</a>
							</li>
							<li>
								<a href="reset-password.html">Reset Password</a>
							</li>
							<li>
								<a href="lock-screen.html">Lock Screen</a>
							</li>
							<li>
								<a href="subscribe.html">Subscribe</a>
							</li>
							<li>
								<a href="maintenance.html">Maintenance</a>
							</li>
							<li>
								<a href="error.html">404</a>
							</li>
							<li>
								<a href="error-option2.html">Error</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Sidebar menu ends -->

				<!-- Sidebar actions starts -->
				<div class="sidebar-actions">
					<div class="support-tile blue">
						<a href="pricing.html" class="btn btn-light m-auto">Upgrade Account</a>
					</div>
				</div>
				<!-- Sidebar actions ends -->

			</div>

			<!-- Settings tab -->
			<div class="tab-pane fade" id="tab-settings" role="tabpanel" aria-labelledby="settings-tab">

				<!-- Tab content header start -->
				<div class="tab-pane-header">
					Settings
				</div>
				<!-- Tab content header end -->

				<!-- Settings start -->
				<div class="sidebarMenuScroll">
					<div class="sidebar-settings">
						<div class="accordion" id="settingsAccordion">
							<div class="accordion-item">
								<h2 class="accordion-header" id="genInfo">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genCollapse" aria-expanded="true" aria-controls="genCollapse">
										General Info
									</button>
								</h2>
								<div id="genCollapse" class="accordion-collapse collapse show" aria-labelledby="genInfo" data-bs-parent="#settingsAccordion">
									<div class="accordion-body">
										<div class="field-wrapper">
											<input type="text" value="Jeivxezer Lopexz" />
											<div class="field-placeholder">Full Name</div>
										</div>

										<div class="field-wrapper">
											<input type="email" value="jeivxezer-lopexz@email.com" />
											<div class="field-placeholder">Email</div>
										</div>

										<div class="field-wrapper">
											<input type="text" value="0 0000 00000" />
											<div class="field-placeholder">Contact</div>
										</div>
										<div class="field-wrapper m-0">
											<button class="btn btn-primary stripes-btn">Save</button>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="chngPwd">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chngPwdCollapse" aria-expanded="false" aria-controls="chngPwdCollapse">
										Change Password
									</button>
								</h2>
								<div id="chngPwdCollapse" class="accordion-collapse collapse" aria-labelledby="chngPwd" data-bs-parent="#settingsAccordion">
									<div class="accordion-body">
										<div class="field-wrapper">
											<input type="text" value="">
											<div class="field-placeholder">Current Password</div>
										</div>
										<div class="field-wrapper">
											<input type="password" value="">
											<div class="field-placeholder">New Password</div>
										</div>
										<div class="field-wrapper">
											<input type="password" value="">
											<div class="field-placeholder">Confirm Password</div>
										</div>
										<div class="field-wrapper m-0">
											<button class="btn btn-primary stripes-btn">Save</button>
										</div>

									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="sidebarNotifications">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#notiCollapse" aria-expanded="false" aria-controls="notiCollapse">
										Notifications
									</button>
								</h2>
								<div id="notiCollapse" class="accordion-collapse collapse" aria-labelledby="sidebarNotifications" data-bs-parent="#settingsAccordion">
									<div class="accordion-body">
										<div class="list-group m-0">
											<div class="noti-container">
												<div class="noti-block">
													<div>Alerts</div>
													<div class="form-switch">
														<input class="form-check-input" type="checkbox" id="showAlertss" checked>
														<label class="form-check-label" for="showAlertss"></label>
													</div>
												</div>
												<div class="noti-block">
													<div>Enable Sound</div>
													<div class="form-switch">
														<input class="form-check-input" type="checkbox" id="soundEnable">
														<label class="form-check-label" for="soundEnable"></label>
													</div>
												</div>
												<div class="noti-block">
													<div>Allow Chat</div>
													<div class="form-switch">
														<input class="form-check-input" type="checkbox" id="allowChat">
														<label class="form-check-label" for="allowChat"></label>
													</div>
												</div>
												<div class="noti-block">
													<div>Desktop Messages</div>
													<div class="form-switch">
														<input class="form-check-input" type="checkbox" id="desktopMessages">
														<label class="form-check-label" for="desktopMessages"></label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Settings end -->

				<!-- Sidebar actions starts -->
				<div class="sidebar-actions">
					<div class="support-tile blue">
						<a href="account-settings.html" class="btn btn-light m-auto">Advance Settings</a>
					</div>
				</div>
				<!-- Sidebar actions ends -->
			</div>

		</div>
		<!-- Tabs content end -->

	</div>
	<!-- Sidebar content end -->

</nav>
