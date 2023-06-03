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
                                                    <p class="info">Send email notifications of subscriptions and
                                                        deletions to list owner</p>
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
                                                    <p class="info">Send email notifications of subscriptions and
                                                        deletions to list owner</p>
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
                                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                                    aria-haspopup="true">
                                    <span class="avatar">
                                        <img src="{{ asset('Gmbslagi/img/user.svg') }}" alt="User Avatar">
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
                            <div class="card">
                                <div class="card-header">
                                  
                                    <div class="card-title"><h3>Tambah Pajak<button type="button" style="border: none; background:none;">☆</button></h3></div>
                                        <div class="graph-day-selection" role="group" style="margin-left: 60%">
											
										</div>
                                      
                               
                            </div>

                                <div class="card-body">
                                    <div style="border-bottom: solid black 1px;margin-bottom:1%">
                                        <b>Umum</b>
                                        <p>Mata uang bawaan saat ini digunakan pada Dasbor dan Laporan. Bagi mata uang yang lain, nilai tukar harus lebih rendah dari 1 untuk mata uang yang lebih lemah dan lebih dari 1 untuk mata uang yang lebih kuat.</p>
                                    </div>
                                    <!-- Row start -->
                                    <div class="row gutters">
                                       
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="email" placeholder=" Masukan email anda">
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
                                                    <div class="field-placeholder" >Kode <span
                                                        class="text-danger">*</span></div>
                                                    <select class="form-control" id="dropdownSelect">
                                                      <option disabled selected>Pilih salah satu</option>
                                                      <option>Pilihan 1</option>
                                                      <option>Pilihan 2</option>
                                                      <option>Pilihan 3</option>
                                                    </select>
                                                  </div>
                                                  
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="email" placeholder=" Masukan email anda">
                                                <div class="field-placeholder" >Kurs <span
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
                                                    <div class="field-placeholder" >Presisi <span
                                                        class="text-danger">*</span></div>
                                                    <select class="form-control" id="dropdownSelect">
                                                      <option disabled selected>Pilih salah satu</option>
                                                      <option>Pilihan 1</option>
                                                      <option>Pilihan 2</option>
                                                      <option>Pilihan 3</option>
                                                    </select>
                                                  </div>
                                                  
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="email" placeholder=" Masukan email anda">
                                                <div class="field-placeholder" >Simbol <span
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
                                                    <div class="field-placeholder" >Posisi Simbol <span
                                                        class="text-danger">*</span></div>
                                                    <select class="form-control" id="dropdownSelect">
                                                      <option disabled selected>Pilih salah satu</option>
                                                      <option>Pilihan 1</option>
                                                      <option>Pilihan 2</option>
                                                      <option>Pilihan 3</option>
                                                    </select>
                                                  </div>
                                                  
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="email" placeholder=" Masukan email anda">
                                                <div class="field-placeholder" >Pemisah Desimal <span
                                                        class="text-danger">*</span></div>
                                                <div class="form-text">
                                                   
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">

                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="email" placeholder=" Masukan email anda">
                                                <div class="field-placeholder" >Pemisah Ribuan <span
                                                        class="text-danger">*</span></div>
                                                <div class="form-text">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                            <!-- Field wrapper end -->
                                          
                                           
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="d-flex justify-content-end mt-4">
                                                    <a href="#" class="mt-3" style="margin-right: 1%">Batal</a>
                                                    <button class="btn btn-primary" type="submit" style="border-radius: 20px">Simpan</button>
                                                </div>
                                            </div>                                    
                                        </div>
                                       
                                            <!-- Field wrapper end -->

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
    <script src="{{ asset('vvendor/slimscroll/custom-scrollbar.js') }}"></script>

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
