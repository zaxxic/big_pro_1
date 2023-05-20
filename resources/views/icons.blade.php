<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/icons.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->
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
		<link rel="stylesheet" href="{{ asset("Gmbslagi/css/bootstrap.min.css") }}">
		
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{ asset("Gmbslagi/fonts/style.css") }}">

		<!-- Main css -->
		<link rel="stylesheet" href="{{ asset("Gmbslagi/css/main.css") }}">


		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Mega Menu -->
		<link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/megamenu/css/megamenu.css") }}">

		<!-- Search Filter JS -->
		<link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/search-filter.css") }}">
		<link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/search-filter/custom-search-filter.css") }}">

		<!-- Bootstrap Select CSS -->
		<link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/bs-select/bs-select.css") }}" />

		<!-- Date Range CSS -->
		<link rel="stylesheet" href="{{ asset("Gmbslagi/vendor/daterange/daterange.css") }}">

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
											<img src="img/user.svg" alt="User Avatar">
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
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
									
                                        <!-- Row start -->
                                        <div class="row gutters">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                
                                                <div class="icons-container">
                                                    <span class="icon-airplay"></span>
                                                    <span class="icon-alert-circle"></span>
                                                    <span class="icon-alert-octagon"></span>
                                                    <span class="icon-alert-triangle"></span>
                                                    <span class="icon-align-center"></span>
                                                    <span class="icon-align-justify"></span>
                                                    <span class="icon-align-left1"></span>
                                                    <span class="icon-align-right1"></span>
                                                    <span class="icon-anchor"></span>
                                                    <span class="icon-aperture"></span>
                                                    <span class="icon-archive1"></span>
                                                    <span class="icon-arrow-down"></span>
                                                    <span class="icon-arrow-down-circle"></span>
                                                    <span class="icon-arrow-down-left"></span>
                                                    <span class="icon-arrow-down-right"></span>
                                                    <span class="icon-arrow-left"></span>
                                                    <span class="icon-arrow-left-circle"></span>
                                                    <span class="icon-arrow-right"></span>
                                                    <span class="icon-arrow-right-circle"></span>
                                                    <span class="icon-arrow-up"></span>
                                                    <span class="icon-arrow-up-circle"></span>
                                                    <span class="icon-arrow-up-left"></span>
                                                    <span class="icon-arrow-up-right"></span>
                                                    <span class="icon-at-sign"></span>
                                                    <span class="icon-award"></span>
                                                    <span class="icon-bar-chart"></span>
                                                    <span class="icon-bar-chart-2"></span>
                                                    <span class="icon-battery"></span>
                                                    <span class="icon-battery-charging"></span>
                                                    <span class="icon-bell"></span>
                                                    <span class="icon-bell-off"></span>
                                                    <span class="icon-bluetooth1"></span>
                                                    <span class="icon-bold"></span>
                                                    <span class="icon-book"></span>
                                                    <span class="icon-book-open"></span>
                                                    <span class="icon-bookmark1"></span>
                                                    <span class="icon-box"></span>
                                                    <span class="icon-briefcase"></span>
                                                    <span class="icon-calendar1"></span>
                                                    <span class="icon-camera2"></span>
                                                    <span class="icon-camera-off"></span>
                                                    <span class="icon-cast"></span>
                                                    <span class="icon-check2"></span>
                                                    <span class="icon-check-circle"></span>
                                                    <span class="icon-check-square"></span>
                                                    <span class="icon-chevron-down1"></span>
                                                    <span class="icon-chevron-left1"></span>
                                                    <span class="icon-chevron-right1"></span>
                                                    <span class="icon-chevron-up1"></span>
                                                    <span class="icon-chevrons-down"></span>
                                                    <span class="icon-chevrons-left"></span>
                                                    <span class="icon-chevrons-right"></span>
                                                    <span class="icon-chevrons-up"></span>
                                                    <span class="icon-chrome"></span>
                                                    <span class="icon-circle1"></span>
                                                    <span class="icon-clipboard"></span>
                                                    <span class="icon-clock1"></span>
                                                    <span class="icon-cloud"></span>
                                                    <span class="icon-cloud-drizzle"></span>
                                                    <span class="icon-cloud-lightning"></span>
                                                    <span class="icon-cloud-off"></span>
                                                    <span class="icon-cloud-rain"></span>
                                                    <span class="icon-cloud-snow"></span>
                                                    <span class="icon-code2"></span>
                                                    <span class="icon-codepen"></span>
                                                    <span class="icon-command"></span>
                                                    <span class="icon-compass"></span>
                                                    <span class="icon-copy"></span>
                                                    <span class="icon-corner-down-left"></span>
                                                    <span class="icon-corner-down-right"></span>
                                                    <span class="icon-corner-left-down"></span>
                                                    <span class="icon-corner-left-up"></span>
                                                    <span class="icon-corner-right-down"></span>
                                                    <span class="icon-corner-right-up"></span>
                                                    <span class="icon-corner-up-left"></span>
                                                    <span class="icon-corner-up-right"></span>
                                                    <span class="icon-cpu"></span>
                                                    <span class="icon-credit-card"></span>
                                                    <span class="icon-crop1"></span>
                                                    <span class="icon-crosshair"></span>
                                                    <span class="icon-database"></span>
                                                    <span class="icon-delete1"></span>
                                                    <span class="icon-disc"></span>
                                                    <span class="icon-dollar-sign"></span>
                                                    <span class="icon-download1"></span>
                                                    <span class="icon-download-cloud"></span>
                                                    <span class="icon-droplet"></span>
                                                    <span class="icon-edit1"></span>
                                                    <span class="icon-edit-2"></span>
                                                    <span class="icon-edit-3"></span>
                                                    <span class="icon-external-link"></span>
                                                    <span class="icon-eye1"></span>
                                                    <span class="icon-eye-off"></span>
                                                    <span class="icon-facebook1"></span>
                                                    <span class="icon-fast-forward"></span>
                                                    <span class="icon-feather"></span>
                                                    <span class="icon-file"></span>
                                                    <span class="icon-file-minus"></span>
                                                    <span class="icon-file-plus"></span>
                                                    <span class="icon-file-text"></span>
                                                    <span class="icon-film"></span>
                                                    <span class="icon-filter"></span>
                                                    <span class="icon-flag2"></span>
                                                    <span class="icon-folder2"></span>
                                                    <span class="icon-folder-minus"></span>
                                                    <span class="icon-folder-plus"></span>
                                                    <span class="icon-gift"></span>
                                                    <span class="icon-git-branch"></span>
                                                    <span class="icon-git-commit"></span>
                                                    <span class="icon-git-merge"></span>
                                                    <span class="icon-git-pull-request"></span>
                                                    <span class="icon-github"></span>
                                                    <span class="icon-gitlab"></span>
                                                    <span class="icon-globe1"></span>
                                                    <span class="icon-grid"></span>
                                                    <span class="icon-hard-drive"></span>
                                                    <span class="icon-hash"></span>
                                                    <span class="icon-headphones"></span>
                                                    <span class="icon-heart"></span>
                                                    <span class="icon-help-circle"></span>
                                                    <span class="icon-home2"></span>
                                                    <span class="icon-image"></span>
                                                    <span class="icon-inbox"></span>
                                                    <span class="icon-info2"></span>
                                                    <span class="icon-instagram"></span>
                                                    <span class="icon-italic"></span>
                                                    <span class="icon-layers2"></span>
                                                    <span class="icon-layout"></span>
                                                    <span class="icon-life-buoy"></span>
                                                    <span class="icon-link2"></span>
                                                    <span class="icon-link-2"></span>
                                                    <span class="icon-linkedin1"></span>
                                                    <span class="icon-list2"></span>
                                                    <span class="icon-loader"></span>
                                                    <span class="icon-lock2"></span>
                                                    <span class="icon-log-in"></span>
                                                    <span class="icon-log-out1"></span>
                                                    <span class="icon-mail"></span>
                                                    <span class="icon-map2"></span>
                                                    <span class="icon-map-pin"></span>
                                                    <span class="icon-maximize"></span>
                                                    <span class="icon-maximize-2"></span>
                                                    <span class="icon-menu1"></span>
                                                    <span class="icon-message-circle"></span>
                                                    <span class="icon-message-square"></span>
                                                    <span class="icon-mic1"></span>
                                                    <span class="icon-mic-off"></span>
                                                    <span class="icon-minimize"></span>
                                                    <span class="icon-minimize-2"></span>
                                                    <span class="icon-minus1"></span>
                                                    <span class="icon-minus-circle"></span>
                                                    <span class="icon-minus-square"></span>
                                                    <span class="icon-monitor"></span>
                                                    <span class="icon-moon"></span>
                                                    <span class="icon-more-horizontal"></span>
                                                    <span class="icon-more-vertical"></span>
                                                    <span class="icon-move"></span>
                                                    <span class="icon-music"></span>
                                                    <span class="icon-navigation1"></span>
                                                    <span class="icon-navigation-2"></span>
                                                    <span class="icon-octagon"></span>
                                                    <span class="icon-package"></span>
                                                    <span class="icon-paperclip"></span>
                                                    <span class="icon-pause1"></span>
                                                    <span class="icon-pause-circle"></span>
                                                    <span class="icon-percent"></span>
                                                    <span class="icon-phone1"></span>
                                                    <span class="icon-phone-call"></span>
                                                    <span class="icon-phone-forwarded"></span>
                                                    <span class="icon-phone-incoming"></span>
                                                    <span class="icon-phone-missed"></span>
                                                    <span class="icon-phone-off"></span>
                                                    <span class="icon-phone-outgoing"></span>
                                                    <span class="icon-pie-chart1"></span>
                                                    <span class="icon-play"></span>
                                                    <span class="icon-play-circle"></span>
                                                    <span class="icon-plus1"></span>
                                                    <span class="icon-plus-circle"></span>
                                                    <span class="icon-plus-square"></span>
                                                    <span class="icon-pocket"></span>
                                                    <span class="icon-power1"></span>
                                                    <span class="icon-printer"></span>
                                                    <span class="icon-radio"></span>
                                                    <span class="icon-refresh-ccw"></span>
                                                    <span class="icon-refresh-cw"></span>
                                                    <span class="icon-repeat1"></span>
                                                    <span class="icon-rewind"></span>
                                                    <span class="icon-rotate-ccw"></span>
                                                    <span class="icon-rotate-cw"></span>
                                                    <span class="icon-rss"></span>
                                                    <span class="icon-save2"></span>
                                                    <span class="icon-scissors1"></span>
                                                    <span class="icon-search1"></span>
                                                    <span class="icon-send1"></span>
                                                    <span class="icon-server"></span>
                                                    <span class="icon-settings1"></span>
                                                    <span class="icon-share1"></span>
                                                    <span class="icon-share-2"></span>
                                                    <span class="icon-shield1"></span>
                                                    <span class="icon-shield-off"></span>
                                                    <span class="icon-shopping-bag1"></span>
                                                    <span class="icon-shopping-cart1"></span>
                                                    <span class="icon-shuffle1"></span>
                                                    <span class="icon-sidebar"></span>
                                                    <span class="icon-skip-back"></span>
                                                    <span class="icon-skip-forward"></span>
                                                    <span class="icon-slack"></span>
                                                    <span class="icon-slash"></span>
                                                    <span class="icon-sliders"></span>
                                                    <span class="icon-smartphone"></span>
                                                    <span class="icon-speaker"></span>
                                                    <span class="icon-square"></span>
                                                    <span class="icon-star2"></span>
                                                    <span class="icon-stop-circle"></span>
                                                    <span class="icon-sun"></span>
                                                    <span class="icon-sunrise"></span>
                                                    <span class="icon-sunset"></span>
                                                    <span class="icon-tablet"></span>
                                                    <span class="icon-tag1"></span>
                                                    <span class="icon-target"></span>
                                                    <span class="icon-terminal"></span>
                                                    <span class="icon-thermometer"></span>
                                                    <span class="icon-thumbs-down1"></span>
                                                    <span class="icon-thumbs-up1"></span>
                                                    <span class="icon-toggle-left"></span>
                                                    <span class="icon-toggle-right"></span>
                                                    <span class="icon-trash"></span>
                                                    <span class="icon-trash-2"></span>
                                                    <span class="icon-trending-down"></span>
                                                    <span class="icon-trending-up"></span>
                                                    <span class="icon-triangle"></span>
                                                    <span class="icon-truck"></span>
                                                    <span class="icon-tv"></span>
                                                    <span class="icon-twitter1"></span>
                                                    <span class="icon-type"></span>
                                                    <span class="icon-umbrella"></span>
                                                    <span class="icon-underline"></span>
                                                    <span class="icon-unlock"></span>
                                                    <span class="icon-upload1"></span>
                                                    <span class="icon-upload-cloud"></span>
                                                    <span class="icon-user1"></span>
                                                    <span class="icon-user-check"></span>
                                                    <span class="icon-user-minus"></span>
                                                    <span class="icon-user-plus"></span>
                                                    <span class="icon-user-x"></span>
                                                    <span class="icon-users"></span>
                                                    <span class="icon-video"></span>
                                                    <span class="icon-video-off"></span>
                                                    <span class="icon-voicemail"></span>
                                                    <span class="icon-volume"></span>
                                                    <span class="icon-volume-1"></span>
                                                    <span class="icon-volume-2"></span>
                                                    <span class="icon-volume-x"></span>
                                                    <span class="icon-watch1"></span>
                                                    <span class="icon-wifi1"></span>
                                                    <span class="icon-wifi-off"></span>
                                                    <span class="icon-wind"></span>
                                                    <span class="icon-x"></span>
                                                    <span class="icon-x-circle"></span>
                                                    <span class="icon-x-square"></span>
                                                    <span class="icon-youtube1"></span>
                                                    <span class="icon-zap"></span>
                                                    <span class="icon-zap-off"></span>
                                                    <span class="icon-zoom-in"></span>
                                                    <span class="icon-zoom-out"></span>
                                                    <span class="icon-sunrise1"></span>
                                                    <span class="icon-sun1"></span>
                                                    <span class="icon-moon1"></span>
                                                    <span class="icon-cloudy"></span>
                                                    <span class="icon-cloud1"></span>
                                                    <span class="icon-weather"></span>
                                                    <span class="icon-weather1"></span>
                                                    <span class="icon-lines"></span>
                                                    <span class="icon-cloud2"></span>
                                                    <span class="icon-lightning"></span>
                                                    <span class="icon-rainy"></span>
                                                    <span class="icon-windy"></span>
                                                    <span class="icon-snowy"></span>
                                                    <span class="icon-weather2"></span>
                                                    <span class="icon-lightning1"></span>
                                                    <span class="icon-sun2"></span>
                                                    <span class="icon-moon2"></span>
                                                    <span class="icon-Celsius"></span>
                                                    <span class="icon-Fahrenheit"></span>
                                                    <span class="icon-resize-full-screen"></span>
                                                    <span class="icon-save"></span>
                                                    <span class="icon-select-arrows"></span>
                                                    <span class="icon-triangle-down"></span>
                                                    <span class="icon-triangle-left"></span>
                                                    <span class="icon-triangle-right"></span>
                                                    <span class="icon-triangle-up"></span>
                                                    <span class="icon-uninstall"></span>
                                                    <span class="icon-circular-graph"></span>
                                                    <span class="icon-clock"></span>
                                                    <span class="icon-code"></span>
                                                    <span class="icon-cog"></span>
                                                    <span class="icon-colours"></span>
                                                    <span class="icon-credit"></span>
                                                    <span class="icon-cw"></span>
                                                    <span class="icon-cycle"></span>
                                                    <span class="icon-documents"></span>
                                                    <span class="icon-drive"></span>
                                                    <span class="icon-upload-to-cloud"></span>
                                                    <span class="icon-upload"></span>
                                                    <span class="icon-add-user"></span>
                                                    <span class="icon-address"></span>
                                                    <span class="icon-adjust"></span>
                                                    <span class="icon-align-bottom"></span>
                                                    <span class="icon-align-horizontal-middle"></span>
                                                    <span class="icon-align-left"></span>
                                                    <span class="icon-align-right"></span>
                                                    <span class="icon-align-top"></span>
                                                    <span class="icon-align-vertical-middle"></span>
                                                    <span class="icon-archive"></span>
                                                    <span class="icon-area-graph"></span>
                                                    <span class="icon-attachment"></span>
                                                    <span class="icon-calendar"></span>
                                                    <span class="icon-add-to-list"></span>
                                                    <span class="icon-controller-fast-backward"></span>
                                                    <span class="icon-creative-commons"></span>
                                                    <span class="icon-document-landscape"></span>
                                                    <span class="icon-warning"></span>
                                                    <span class="icon-arrow-with-circle-down"></span>
                                                    <span class="icon-arrow-with-circle-left"></span>
                                                    <span class="icon-arrow-with-circle-right"></span>
                                                    <span class="icon-arrow-with-circle-up"></span>
                                                    <span class="icon-bookmark"></span>
                                                    <span class="icon-bookmarks"></span>
                                                    <span class="icon-chevron-down"></span>
                                                    <span class="icon-chevron-left"></span>
                                                    <span class="icon-chevron-right"></span>
                                                    <span class="icon-chevron-up"></span>
                                                    <span class="icon-controller-fast-forward"></span>
                                                    <span class="icon-controller-jump-to-start"></span>
                                                    <span class="icon-controller-next"></span>
                                                    <span class="icon-controller-paus"></span>
                                                    <span class="icon-controller-play"></span>
                                                    <span class="icon-controller-record"></span>
                                                    <span class="icon-controller-stop"></span>
                                                    <span class="icon-controller-volume"></span>
                                                    <span class="icon-dot-single"></span>
                                                    <span class="icon-dots-three-horizontal"></span>
                                                    <span class="icon-dots-three-vertical"></span>
                                                    <span class="icon-dots-two-horizontal"></span>
                                                    <span class="icon-dots-two-vertical"></span>
                                                    <span class="icon-download"></span>
                                                    <span class="icon-layers"></span>
                                                    <span class="icon-resize-100"></span>
                                                    <span class="icon-camera"></span>
                                                    <span class="icon-chat"></span>
                                                    <span class="icon-check"></span>
                                                    <span class="icon-circle-with-cross"></span>
                                                    <span class="icon-circle-with-minus"></span>
                                                    <span class="icon-circle-with-plus"></span>
                                                    <span class="icon-circle"></span>
                                                    <span class="icon-edit"></span>
                                                    <span class="icon-email"></span>
                                                    <span class="icon-emoji-happy"></span>
                                                    <span class="icon-emoji-neutral"></span>
                                                    <span class="icon-emoji-sad"></span>
                                                    <span class="icon-erase"></span>
                                                    <span class="icon-export"></span>
                                                    <span class="icon-eye"></span>
                                                    <span class="icon-flag"></span>
                                                    <span class="icon-flash"></span>
                                                    <span class="icon-folder-video"></span>
                                                    <span class="icon-folder"></span>
                                                    <span class="icon-forward"></span>
                                                    <span class="icon-globe"></span>
                                                    <span class="icon-help-with-circle"></span>
                                                    <span class="icon-home"></span>
                                                    <span class="icon-info-with-circle"></span>
                                                    <span class="icon-info"></span>
                                                    <span class="icon-light-bulb"></span>
                                                    <span class="icon-light-down"></span>
                                                    <span class="icon-light-up"></span>
                                                    <span class="icon-line-graph"></span>
                                                    <span class="icon-link"></span>
                                                    <span class="icon-list"></span>
                                                    <span class="icon-location-pin"></span>
                                                    <span class="icon-location"></span>
                                                    <span class="icon-lock-open"></span>
                                                    <span class="icon-lock"></span>
                                                    <span class="icon-log-out"></span>
                                                    <span class="icon-login"></span>
                                                    <span class="icon-magnet"></span>
                                                    <span class="icon-magnifying-glass"></span>
                                                    <span class="icon-map"></span>
                                                    <span class="icon-minus"></span>
                                                    <span class="icon-palette"></span>
                                                    <span class="icon-pencil"></span>
                                                    <span class="icon-pie-chart"></span>
                                                    <span class="icon-pin"></span>
                                                    <span class="icon-plus"></span>
                                                    <span class="icon-power-plug"></span>
                                                    <span class="icon-price-tag"></span>
                                                    <span class="icon-reply-all"></span>
                                                    <span class="icon-reply"></span>
                                                    <span class="icon-retweet"></span>
                                                    <span class="icon-rocket"></span>
                                                    <span class="icon-round-brush"></span>
                                                    <span class="icon-scissors"></span>
                                                    <span class="icon-share-alternitive"></span>
                                                    <span class="icon-share"></span>
                                                    <span class="icon-shareable"></span>
                                                    <span class="icon-shield"></span>
                                                    <span class="icon-shopping-bag"></span>
                                                    <span class="icon-shopping-basket"></span>
                                                    <span class="icon-shopping-cart"></span>
                                                    <span class="icon-sound-mix"></span>
                                                    <span class="icon-sports-club"></span>
                                                    <span class="icon-squared-cross"></span>
                                                    <span class="icon-squared-minus"></span>
                                                    <span class="icon-squared-plus"></span>
                                                    <span class="icon-star-outlined"></span>
                                                    <span class="icon-star"></span>
                                                    <span class="icon-swap"></span>
                                                    <span class="icon-tag"></span>
                                                    <span class="icon-thumbs-down"></span>
                                                    <span class="icon-thumbs-up"></span>
                                                    <span class="icon-time-slot"></span>
                                                    <span class="icon-typing"></span>
                                                    <span class="icon-untag"></span>
                                                    <span class="icon-user"></span>
                                                    <span class="icon-wallet"></span>
                                                    <span class="icon-dribbble-with-circle"></span>
                                                    <span class="icon-dribbble"></span>
                                                    <span class="icon-facebook-with-circle"></span>
                                                    <span class="icon-facebook"></span>
                                                    <span class="icon-flickr-with-circle"></span>
                                                    <span class="icon-google-with-circle"></span>
                                                    <span class="icon-google"></span>
                                                    <span class="icon-instagram-with-circle"></span>
                                                    <span class="icon-linkedin-with-circle"></span>
                                                    <span class="icon-linkedin"></span>
                                                    <span class="icon-pinterest-with-circle"></span>
                                                    <span class="icon-pinterest"></span>
                                                    <span class="icon-tumblr-with-circle"></span>
                                                    <span class="icon-tumblr"></span>
                                                    <span class="icon-twitter-with-circle"></span>
                                                    <span class="icon-twitter"></span>
                                                    <span class="icon-vimeo-with-circle"></span>
                                                    <span class="icon-vimeo"></span>
                                                    <span class="icon-youtube-with-circle"></span>
                                                    <span class="icon-youtube"></span>
                                                    <span class="icon-schedule"></span>
                                                    <span class="icon-accessibility"></span>
                                                    <span class="icon-account_box"></span>
                                                    <span class="icon-account_circle"></span>
                                                    <span class="icon-add"></span>
                                                    <span class="icon-add_a_photo"></span>
                                                    <span class="icon-add_box"></span>
                                                    <span class="icon-add_circle"></span>
                                                    <span class="icon-control_point"></span>
                                                    <span class="icon-adjust1"></span>
                                                    <span class="icon-airport_shuttle"></span>
                                                    <span class="icon-alarm_on"></span>
                                                    <span class="icon-album"></span>
                                                    <span class="icon-android"></span>
                                                    <span class="icon-apps"></span>
                                                    <span class="icon-arrow_back"></span>
                                                    <span class="icon-arrow_downward"></span>
                                                    <span class="icon-arrow_drop_down"></span>
                                                    <span class="icon-arrow_drop_up"></span>
                                                    <span class="icon-arrow_forward"></span>
                                                    <span class="icon-arrow_upward"></span>
                                                    <span class="icon-assignment"></span>
                                                    <span class="icon-assignment_turned_in"></span>
                                                    <span class="icon-assistant"></span>
                                                    <span class="icon-flag1"></span>
                                                    <span class="icon-attach_file"></span>
                                                    <span class="icon-attach_money"></span>
                                                    <span class="icon-attachment1"></span>
                                                    <span class="icon-autorenew"></span>
                                                    <span class="icon-av_timer"></span>
                                                    <span class="icon-backspace"></span>
                                                    <span class="icon-cloud_upload"></span>
                                                    <span class="icon-beach_access"></span>
                                                    <span class="icon-beenhere"></span>
                                                    <span class="icon-block"></span>
                                                    <span class="icon-bluetooth"></span>
                                                    <span class="icon-bluetooth_searching"></span>
                                                    <span class="icon-bluetooth_connected"></span>
                                                    <span class="icon-bluetooth_disabled"></span>
                                                    <span class="icon-blur_on"></span>
                                                    <span class="icon-turned_in"></span>
                                                    <span class="icon-turned_in_not"></span>
                                                    <span class="icon-border_all"></span>
                                                    <span class="icon-border_color"></span>
                                                    <span class="icon-border_outer"></span>
                                                    <span class="icon-brightness_1"></span>
                                                    <span class="icon-brightness_auto"></span>
                                                    <span class="icon-broken_image"></span>
                                                    <span class="icon-brush"></span>
                                                    <span class="icon-bubble_chart"></span>
                                                    <span class="icon-bug_report"></span>
                                                    <span class="icon-burst_mode"></span>
                                                    <span class="icon-domain"></span>
                                                    <span class="icon-business_center"></span>
                                                    <span class="icon-cached"></span>
                                                    <span class="icon-cake"></span>
                                                    <span class="icon-phone"></span>
                                                    <span class="icon-call_end"></span>
                                                    <span class="icon-call_made"></span>
                                                    <span class="icon-merge_type"></span>
                                                    <span class="icon-call_missed"></span>
                                                    <span class="icon-call_missed_outgoing"></span>
                                                    <span class="icon-call_received"></span>
                                                    <span class="icon-call_split"></span>
                                                    <span class="icon-camera1"></span>
                                                    <span class="icon-photo_camera"></span>
                                                    <span class="icon-cancel"></span>
                                                    <span class="icon-redeem"></span>
                                                    <span class="icon-card_membership"></span>
                                                    <span class="icon-card_travel"></span>
                                                    <span class="icon-casino"></span>
                                                    <span class="icon-center_focus_strong"></span>
                                                    <span class="icon-center_focus_weak"></span>
                                                    <span class="icon-change_history"></span>
                                                    <span class="icon-chat_bubble"></span>
                                                    <span class="icon-chat_bubble_outline"></span>
                                                    <span class="icon-check1"></span>
                                                    <span class="icon-check_box"></span>
                                                    <span class="icon-check_box_outline_blank"></span>
                                                    <span class="icon-check_circle"></span>
                                                    <span class="icon-navigate_before"></span>
                                                    <span class="icon-navigate_next"></span>
                                                    <span class="icon-child_friendly"></span>
                                                    <span class="icon-close"></span>
                                                    <span class="icon-clear_all"></span>
                                                    <span class="icon-closed_caption"></span>
                                                    <span class="icon-wb_cloudy"></span>
                                                    <span class="icon-cloud_circle"></span>
                                                    <span class="icon-cloud_done"></span>
                                                    <span class="icon-cloud_download"></span>
                                                    <span class="icon-cloud_off"></span>
                                                    <span class="icon-cloud_queue"></span>
                                                    <span class="icon-code1"></span>
                                                    <span class="icon-palette1"></span>
                                                    <span class="icon-comment"></span>
                                                    <span class="icon-compare"></span>
                                                    <span class="icon-compare_arrows"></span>
                                                    <span class="icon-laptop"></span>
                                                    <span class="icon-confirmation_number"></span>
                                                    <span class="icon-contact_mail"></span>
                                                    <span class="icon-content_cut"></span>
                                                    <span class="icon-copyright"></span>
                                                    <span class="icon-mode_edit"></span>
                                                    <span class="icon-create_new_folder"></span>
                                                    <span class="icon-crop"></span>
                                                    <span class="icon-crop_free"></span>
                                                    <span class="icon-crop_square"></span>
                                                    <span class="icon-data_usage"></span>
                                                    <span class="icon-date_range"></span>
                                                    <span class="icon-dehaze"></span>
                                                    <span class="icon-delete"></span>
                                                    <span class="icon-delete_sweep"></span>
                                                    <span class="icon-details"></span>
                                                    <span class="icon-developer_board"></span>
                                                    <span class="icon-phonelink"></span>
                                                    <span class="icon-devices_other"></span>
                                                    <span class="icon-dialer_sip"></span>
                                                    <span class="icon-directions"></span>
                                                    <span class="icon-directions_boat"></span>
                                                    <span class="icon-directions_bus"></span>
                                                    <span class="icon-directions_car"></span>
                                                    <span class="icon-directions_railway"></span>
                                                    <span class="icon-directions_transit"></span>
                                                    <span class="icon-disc_full"></span>
                                                    <span class="icon-dns"></span>
                                                    <span class="icon-not_interested"></span>
                                                    <span class="icon-do_not_disturb_alt"></span>
                                                    <span class="icon-do_not_disturb_off"></span>
                                                    <span class="icon-remove_circle"></span>
                                                    <span class="icon-done"></span>
                                                    <span class="icon-done_all"></span>
                                                    <span class="icon-donut_large"></span>
                                                    <span class="icon-donut_small"></span>
                                                    <span class="icon-drafts"></span>
                                                    <span class="icon-drag_handle"></span>
                                                    <span class="icon-time_to_leave"></span>
                                                    <span class="icon-eject"></span>
                                                    <span class="icon-error"></span>
                                                    <span class="icon-error_outline"></span>
                                                    <span class="icon-euro_symbol"></span>
                                                    <span class="icon-insert_invitation"></span>
                                                    <span class="icon-event_available"></span>
                                                    <span class="icon-event_note"></span>
                                                    <span class="icon-event_seat"></span>
                                                    <span class="icon-exit_to_app"></span>
                                                    <span class="icon-expand_less"></span>
                                                    <span class="icon-expand_more"></span>
                                                    <span class="icon-explicit"></span>
                                                    <span class="icon-explore"></span>
                                                    <span class="icon-fast_forward"></span>
                                                    <span class="icon-fast_rewind"></span>
                                                    <span class="icon-favorite"></span>
                                                    <span class="icon-fiber_manual_record"></span>
                                                    <span class="icon-fiber_smart_record"></span>
                                                    <span class="icon-get_app"></span>
                                                    <span class="icon-file_upload"></span>
                                                    <span class="icon-filter_drama"></span>
                                                    <span class="icon-filter_frames"></span>
                                                    <span class="icon-terrain"></span>
                                                    <span class="icon-filter_list"></span>
                                                    <span class="icon-filter_none"></span>
                                                    <span class="icon-filter_tilt_shift"></span>
                                                    <span class="icon-first_page"></span>
                                                    <span class="icon-flare"></span>
                                                    <span class="icon-flash_auto"></span>
                                                    <span class="icon-flight_land"></span>
                                                    <span class="icon-flight_takeoff"></span>
                                                    <span class="icon-folder1"></span>
                                                    <span class="icon-folder_open"></span>
                                                    <span class="icon-folder_shared"></span>
                                                    <span class="icon-folder_special"></span>
                                                    <span class="icon-font_download"></span>
                                                    <span class="icon-format_align_center"></span>
                                                    <span class="icon-format_align_justify"></span>
                                                    <span class="icon-format_align_left"></span>
                                                    <span class="icon-format_align_right"></span>
                                                    <span class="icon-format_bold"></span>
                                                    <span class="icon-format_clear"></span>
                                                    <span class="icon-format_color_fill"></span>
                                                    <span class="icon-format_color_reset"></span>
                                                    <span class="icon-format_color_text"></span>
                                                    <span class="icon-format_indent_decrease"></span>
                                                    <span class="icon-format_indent_increase"></span>
                                                    <span class="icon-format_italic"></span>
                                                    <span class="icon-format_line_spacing"></span>
                                                    <span class="icon-format_list_bulleted"></span>
                                                    <span class="icon-format_list_numbered"></span>
                                                    <span class="icon-format_quote"></span>
                                                    <span class="icon-format_shapes"></span>
                                                    <span class="icon-format_size"></span>
                                                    <span class="icon-format_strikethrough"></span>
                                                    <span class="icon-format_textdirection_l_to_r"></span>
                                                    <span class="icon-format_textdirection_r_to_l"></span>
                                                    <span class="icon-format_underlined"></span>
                                                    <span class="icon-question_answer"></span>
                                                    <span class="icon-fullscreen"></span>
                                                    <span class="icon-fullscreen_exit"></span>
                                                    <span class="icon-games"></span>
                                                    <span class="icon-gif"></span>
                                                    <span class="icon-my_location"></span>
                                                    <span class="icon-location_searching"></span>
                                                    <span class="icon-location_disabled"></span>
                                                    <span class="icon-star1"></span>
                                                    <span class="icon-graphic_eq"></span>
                                                    <span class="icon-grid_on"></span>
                                                    <span class="icon-people"></span>
                                                    <span class="icon-group_add"></span>
                                                    <span class="icon-hdr_on"></span>
                                                    <span class="icon-hdr_strong"></span>
                                                    <span class="icon-hdr_weak"></span>
                                                    <span class="icon-headset"></span>
                                                    <span class="icon-headset_mic"></span>
                                                    <span class="icon-help"></span>
                                                    <span class="icon-help_outline"></span>
                                                    <span class="icon-high_quality"></span>
                                                    <span class="icon-highlight"></span>
                                                    <span class="icon-highlight_off"></span>
                                                    <span class="icon-restore"></span>
                                                    <span class="icon-home1"></span>
                                                    <span class="icon-hourglass_empty"></span>
                                                    <span class="icon-hourglass_full"></span>
                                                    <span class="icon-lock1"></span>
                                                    <span class="icon-photo"></span>
                                                    <span class="icon-import_contacts"></span>
                                                    <span class="icon-import_export"></span>
                                                    <span class="icon-info1"></span>
                                                    <span class="icon-info_outline"></span>
                                                    <span class="icon-input"></span>
                                                    <span class="icon-insert_comment"></span>
                                                    <span class="icon-link1"></span>
                                                    <span class="icon-invert_colors"></span>
                                                    <span class="icon-invert_colors_off"></span>
                                                    <span class="icon-keyboard_arrow_down"></span>
                                                    <span class="icon-keyboard_arrow_left"></span>
                                                    <span class="icon-keyboard_arrow_right"></span>
                                                    <span class="icon-keyboard_arrow_up"></span>
                                                    <span class="icon-keyboard_backspace"></span>
                                                    <span class="icon-keyboard_capslock"></span>
                                                    <span class="icon-keyboard_hide"></span>
                                                    <span class="icon-keyboard_return"></span>
                                                    <span class="icon-keyboard_tab"></span>
                                                    <span class="icon-keyboard_voice"></span>
                                                    <span class="icon-label"></span>
                                                    <span class="icon-label_outline"></span>
                                                    <span class="icon-language"></span>
                                                    <span class="icon-laptop_chromebook"></span>
                                                    <span class="icon-laptop_mac"></span>
                                                    <span class="icon-laptop_windows"></span>
                                                    <span class="icon-last_page"></span>
                                                    <span class="icon-open_in_new"></span>
                                                    <span class="icon-layers1"></span>
                                                    <span class="icon-lens"></span>
                                                    <span class="icon-lightbulb_outline"></span>
                                                    <span class="icon-linear_scale"></span>
                                                    <span class="icon-linked_camera"></span>
                                                    <span class="icon-list1"></span>
                                                    <span class="icon-local_play"></span>
                                                    <span class="icon-local_airport"></span>
                                                    <span class="icon-local_atm"></span>
                                                    <span class="icon-local_bar"></span>
                                                    <span class="icon-local_car_wash"></span>
                                                    <span class="icon-local_drink"></span>
                                                    <span class="icon-shopping_cart"></span>
                                                    <span class="icon-local_hospital"></span>
                                                    <span class="icon-local_library"></span>
                                                    <span class="icon-local_mall"></span>
                                                    <span class="icon-local_offer"></span>
                                                    <span class="icon-local_pizza"></span>
                                                    <span class="icon-print"></span>
                                                    <span class="icon-local_shipping"></span>
                                                    <span class="icon-local_taxi"></span>
                                                    <span class="icon-location_city"></span>
                                                    <span class="icon-room"></span>
                                                    <span class="icon-lock_open"></span>
                                                    <span class="icon-lock_outline"></span>
                                                    <span class="icon-sync"></span>
                                                    <span class="icon-map1"></span>
                                                    <span class="icon-memory"></span>
                                                    <span class="icon-menu"></span>
                                                    <span class="icon-message"></span>
                                                    <span class="icon-mic"></span>
                                                    <span class="icon-mic_none"></span>
                                                    <span class="icon-mic_off"></span>
                                                    <span class="icon-more_horiz"></span>
                                                    <span class="icon-more_vert"></span>
                                                    <span class="icon-multiline_chart"></span>
                                                    <span class="icon-navigation"></span>
                                                    <span class="icon-near_me"></span>
                                                    <span class="icon-network_cell"></span>
                                                    <span class="icon-network_locked"></span>
                                                    <span class="icon-network_wifi"></span>
                                                    <span class="icon-new_releases"></span>
                                                    <span class="icon-note"></span>
                                                    <span class="icon-notifications"></span>
                                                    <span class="icon-notifications_none"></span>
                                                    <span class="icon-offline_pin"></span>
                                                    <span class="icon-opacity"></span>
                                                    <span class="icon-radio_button_unchecked"></span>
                                                    <span class="icon-party_mode"></span>
                                                    <span class="icon-pause"></span>
                                                    <span class="icon-pause_circle_filled"></span>
                                                    <span class="icon-pause_circle_outline"></span>
                                                    <span class="icon-people_outline"></span>
                                                    <span class="icon-person_outline"></span>
                                                    <span class="icon-perm_scan_wifi"></span>
                                                    <span class="icon-person"></span>
                                                    <span class="icon-person_add"></span>
                                                    <span class="icon-person_pin"></span>
                                                    <span class="icon-pets"></span>
                                                    <span class="icon-phone_in_talk"></span>
                                                    <span class="icon-phone_locked"></span>
                                                    <span class="icon-phone_missed"></span>
                                                    <span class="icon-phone_paused"></span>
                                                    <span class="icon-phonelink_off"></span>
                                                    <span class="icon-photo_size_select_actual"></span>
                                                    <span class="icon-picture_in_picture"></span>
                                                    <span class="icon-picture_in_picture_alt"></span>
                                                    <span class="icon-pie_chart"></span>
                                                    <span class="icon-pie_chart_outlined"></span>
                                                    <span class="icon-pin_drop"></span>
                                                    <span class="icon-play_arrow"></span>
                                                    <span class="icon-play_circle_filled"></span>
                                                    <span class="icon-play_circle_outline"></span>
                                                    <span class="icon-playlist_add"></span>
                                                    <span class="icon-playlist_add_check"></span>
                                                    <span class="icon-playlist_play"></span>
                                                    <span class="icon-portable_wifi_off"></span>
                                                    <span class="icon-portrait"></span>
                                                    <span class="icon-power"></span>
                                                    <span class="icon-power_input"></span>
                                                    <span class="icon-power_settings_new"></span>
                                                    <span class="icon-priority_high"></span>
                                                    <span class="icon-public"></span>
                                                    <span class="icon-publish"></span>
                                                    <span class="icon-queue_music"></span>
                                                    <span class="icon-radio_button_checked"></span>
                                                    <span class="icon-rate_review"></span>
                                                    <span class="icon-receipt"></span>
                                                    <span class="icon-recent_actors"></span>
                                                    <span class="icon-record_voice_over"></span>
                                                    <span class="icon-redo"></span>
                                                    <span class="icon-refresh"></span>
                                                    <span class="icon-remove"></span>
                                                    <span class="icon-remove_circle_outline"></span>
                                                    <span class="icon-visibility"></span>
                                                    <span class="icon-reorder"></span>
                                                    <span class="icon-repeat"></span>
                                                    <span class="icon-repeat_one"></span>
                                                    <span class="icon-replay"></span>
                                                    <span class="icon-reply_all"></span>
                                                    <span class="icon-report"></span>
                                                    <span class="icon-warning1"></span>
                                                    <span class="icon-ring_volume"></span>
                                                    <span class="icon-rotate_90_degrees_ccw"></span>
                                                    <span class="icon-rotate_left"></span>
                                                    <span class="icon-rotate_right"></span>
                                                    <span class="icon-router"></span>
                                                    <span class="icon-rss_feed"></span>
                                                    <span class="icon-save1"></span>
                                                    <span class="icon-school"></span>
                                                    <span class="icon-screen_rotation"></span>
                                                    <span class="icon-search"></span>
                                                    <span class="icon-send"></span>
                                                    <span class="icon-sentiment_neutral"></span>
                                                    <span class="icon-sentiment_satisfied"></span>
                                                    <span class="icon-sentiment_very_satisfied"></span>
                                                    <span class="icon-settings"></span>
                                                    <span class="icon-settings_backup_restore"></span>
                                                    <span class="icon-settings_bluetooth"></span>
                                                    <span class="icon-settings_ethernet"></span>
                                                    <span class="icon-settings_input_svideo"></span>
                                                    <span class="icon-shopping_basket"></span>
                                                    <span class="icon-short_text"></span>
                                                    <span class="icon-show_chart"></span>
                                                    <span class="icon-shuffle"></span>
                                                    <span class="icon-signal_cellular_4_bar"></span>
                                                    <span class="icon-signal_cellular_connected_no_internet_4_bar"></span>
                                                    <span class="icon-signal_cellular_null"></span>
                                                    <span class="icon-signal_cellular_off"></span>
                                                    <span class="icon-signal_wifi_4_bar"></span>
                                                    <span class="icon-skip_next"></span>
                                                    <span class="icon-skip_previous"></span>
                                                    <span class="icon-slideshow"></span>
                                                    <span class="icon-slow_motion_video"></span>
                                                    <span class="icon-sort"></span>
                                                    <span class="icon-sort_by_alpha"></span>
                                                    <span class="icon-space_bar"></span>
                                                    <span class="icon-spellcheck"></span>
                                                    <span class="icon-star_border"></span>
                                                    <span class="icon-star_half"></span>
                                                    <span class="icon-stars"></span>
                                                    <span class="icon-stop"></span>
                                                    <span class="icon-store_mall_directory"></span>
                                                    <span class="icon-style"></span>
                                                    <span class="icon-subdirectory_arrow_left"></span>
                                                    <span class="icon-subdirectory_arrow_right"></span>
                                                    <span class="icon-subject"></span>
                                                    <span class="icon-swap_calls"></span>
                                                    <span class="icon-swap_horiz"></span>
                                                    <span class="icon-swap_vert"></span>
                                                    <span class="icon-swap_vertical_circle"></span>
                                                    <span class="icon-sync_problem"></span>
                                                    <span class="icon-text_fields"></span>
                                                    <span class="icon-text_format"></span>
                                                    <span class="icon-texture"></span>
                                                    <span class="icon-thumb_down"></span>
                                                    <span class="icon-thumb_up"></span>
                                                    <span class="icon-thumbs_up_down"></span>
                                                    <span class="icon-timelapse"></span>
                                                    <span class="icon-timeline"></span>
                                                    <span class="icon-timer"></span>
                                                    <span class="icon-title"></span>
                                                    <span class="icon-toc"></span>
                                                    <span class="icon-today"></span>
                                                    <span class="icon-toll"></span>
                                                    <span class="icon-tonality"></span>
                                                    <span class="icon-touch_app"></span>
                                                    <span class="icon-toys"></span>
                                                    <span class="icon-trending_down"></span>
                                                    <span class="icon-trending_flat"></span>
                                                    <span class="icon-trending_up"></span>
                                                    <span class="icon-undo"></span>
                                                    <span class="icon-unfold_less"></span>
                                                    <span class="icon-unfold_more"></span>
                                                    <span class="icon-verified_user"></span>
                                                    <span class="icon-vertical_align_bottom"></span>
                                                    <span class="icon-vertical_align_center"></span>
                                                    <span class="icon-vertical_align_top"></span>
                                                    <span class="icon-vibration"></span>
                                                    <span class="icon-video_call"></span>
                                                    <span class="icon-videocam"></span>
                                                    <span class="icon-view_array"></span>
                                                    <span class="icon-view_carousel"></span>
                                                    <span class="icon-view_column"></span>
                                                    <span class="icon-view_comfy"></span>
                                                    <span class="icon-view_compact"></span>
                                                    <span class="icon-view_day"></span>
                                                    <span class="icon-view_headline"></span>
                                                    <span class="icon-view_module"></span>
                                                    <span class="icon-view_quilt"></span>
                                                    <span class="icon-view_stream"></span>
                                                    <span class="icon-view_week"></span>
                                                    <span class="icon-visibility_off"></span>
                                                    <span class="icon-volume_down"></span>
                                                    <span class="icon-volume_mute"></span>
                                                    <span class="icon-volume_off"></span>
                                                    <span class="icon-volume_up"></span>
                                                    <span class="icon-vpn_key"></span>
                                                    <span class="icon-vpn_lock"></span>
                                                    <span class="icon-watch"></span>
                                                    <span class="icon-watch_later"></span>
                                                    <span class="icon-wb_incandescent"></span>
                                                    <span class="icon-wb_iridescent"></span>
                                                    <span class="icon-wb_sunny"></span>
                                                    <span class="icon-wc"></span>
                                                    <span class="icon-wifi"></span>
                                                    <span class="icon-zoom_out_map"></span>
                                                    <span class="icon-activity"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row end -->
                                        
                                    </div>
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
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="js/moment.js"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Megamenu JS -->
		<script src="vendor/megamenu/js/megamenu.js"></script>
		<script src="vendor/megamenu/js/custom.js"></script>
				
		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Search Filter JS -->
		<script src="vendor/search-filter/search-filter.js"></script>
		<script src="vendor/search-filter/custom-search-filter.js"></script>

		<!-- Bootstrap Select JS -->
		<script src="vendor/bs-select/bs-select.min.js"></script>
		<script src="vendor/bs-select/bs-select-custom.js"></script>

		<!-- Date Range JS -->
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

<!-- Mirrored from www.kodingwife.com/demos/unipro/v1-x/05-design-violet/icons.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 May 2023 03:02:31 GMT -->
</html>