<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>ROKS  </title>
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
      <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/all.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('admin/assets/plugins/simple-calendar/simple-calendar.css') }}" />
      <link rel="stylesheet" href="{{ asset('admin/assets/css/feather.css') }}" />
      <link rel="stylesheet" href="{{ asset('admin/assets/plugins/datatables/datatables.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('admin/assets/plugins/select2/css/select2.min.css') }}" />
      <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}" />
      {{-- <script src="https://cdn.tiny.cloud/1/yc1z64ep1dalugvsdb3dg2cz9sdj5h311v0tm3cl8pdd9m4p/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
   </head>
   <body>
      <div class="main-wrapper">
         @include('admin.partials.header')
         @include('admin.partials.sidebar')
         <div class="page-wrapper">
            {{-- <div class="content container-fluid">
               <div class="row">
                  <div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap">
                     <div class="card detail-box1 details-box">
                        <div class="card-body">
                           <div class="dash-contetnt">
                              <div class="mb-3">
                                 <img src="assets/img/icons/accident.svg" alt="" width="26" />
                              </div>
                              <h4 class="text-white">Total Patients </h4>
                              <h2 class="text-white">245 </h2>
                              <div class="growth-indicator">
                                 <span class="text-white"><i class="fas fa-angle-double-up mr-1"></i> (14.25%) </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap">
                     <div class="card detail-box2 details-box">
                        <div class="card-body">
                           <div class="dash-contetnt">
                              <div class="mb-3">
                                 <img src="assets/img/icons/visits.svg" alt="" width="26" />
                              </div>
                              <h4 class="text-white">Patients Visit </h4>
                              <h2 class="text-white">137 </h2>
                              <div class="growth-indicator">
                                 <span class="text-white"><i class="fas fa-angle-double-down mr-1"></i> (4.78%) </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap">
                     <div class="card detail-box3 details-box">
                        <div class="card-body">
                           <div class="dash-contetnt">
                              <div class="mb-3">
                                 <img src="assets/img/icons/hospital-bed.svg" alt="" width="26" />
                              </div>
                              <h4 class="text-white">New Admit </h4>
                              <h2 class="text-white">24 </h2>
                              <div class="growth-indicator">
                                 <span class="text-white"><i class="fas fa-angle-double-up mr-1"></i> (18.32%) </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap">
                     <div class="card detail-box4 details-box">
                        <div class="card-body">
                           <div class="dash-contetnt">
                              <div class="mb-3">
                                 <img src="assets/img/icons/operating.svg" alt="" width="26" />
                              </div>
                              <h4 class="text-white">Operations </h4>
                              <h2 class="text-white">05 </h2>
                              <div class="growth-indicator">
                                 <span class="text-white"><i class="fas fa-angle-double-down mr-1"></i> (25.14%) </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row calender-col">
                  <div class="col-xl-4">
                     <div class="card">
                        <div class="card-header">
                           <h4 class="card-title">Schedule </h4>
                        </div>
                        <div class="card-body">
                           <div id="calendar-doctor" class="calendar-container"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-8 d-flex">
                     <div class="card flex-fill">
                        <div class="card-header">
                           <div class="d-flex justify-content-between align-items-center">
                              <h5 class="card-title">Patients Profile </h5>
                              <div class="dropdown" data-toggle="dropdown">
                                 <a href="javascript:void(0);" class="btn btn-white btn-sm dropdown-toggle" role="button" data-toggle="dropdown">
                                 This Week
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0);" class="dropdown-item">Today </a>
                                    <a href="javascript:void(0);" class="dropdown-item">This Week </a>
                                    <a href="javascript:void(0);" class="dropdown-item">This Month </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="card-body">
                           <div class="d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                              <div class="w-100 d-md-flex align-items-center mb-3 chart-count">
                                 <div class="mr-3 text-center">
                                    <span>Total Appointments </span>
                                    <p class="h4 text-primary">584 </p>
                                 </div>
                                 <div class="mr-3 text-center">
                                    <span>Old Patients </span>
                                    <p class="h4 text-success">320 </p>
                                 </div>
                                 <div class="mr-3 text-center">
                                    <span>New Patients </span>
                                    <p class="h4 text-warning">264 </p>
                                 </div>
                              </div>
                           </div>
                           <div id="dsh_chart_ex_column"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row calender-col">
                  <div class="col-xl-8">
                     <div class="card">
                        <div class="card-header no-border">
                           <h4 class="card-title">Medicine Requests </h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table mb-0">
                                 <thead>
                                    <tr>
                                       <th>Medicine </th>
                                       <th>Count </th>
                                       <th>Priority </th>
                                       <th>Time </th>
                                       <th>Status </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Desmopressin tabs` </td>
                                       <td>200 strips </td>
                                       <td><span class="badge bg-warning-light">Urgent </span></td>
                                       <td>10 mins ago </td>
                                       <td class="text-warning">Pending Approval </td>
                                    </tr>
                                    <tr>
                                       <td>Abciximab-injection </td>
                                       <td>50 nos </td>
                                       <td><span class="badge bg-info-light">Next Week </span></td>
                                       <td>5 days ago </td>
                                       <td class="text-success">On Time </td>
                                    </tr>
                                    <tr>
                                       <td>Paliperidone palmitate </td>
                                       <td>75 Strips </td>
                                       <td><span class="badge bg-info-light">Next Week </span></td>
                                       <td>1 Day Ago </td>
                                       <td class="text-danger">Delay </td>
                                    </tr>
                                    <tr>
                                       <td>Sermorelin-injectable </td>
                                       <td>22 nos </td>
                                       <td><span class="badge bg-warning-light">Urgent </span></td>
                                       <td>8 mins ago </td>
                                       <td class="text-warning">Pending Approval </td>
                                    </tr>
                                    <tr>
                                       <td>Abciximab-injection </td>
                                       <td>10 nos </td>
                                       <td><span class="badge bg-info-light">Next Week </span></td>
                                       <td>2 days ago </td>
                                       <td class="text-danger">Delay </td>
                                    </tr>
                                    <tr>
                                       <td>Kevzara sarilumab </td>
                                       <td>35 Strips </td>
                                       <td><span class="badge bg-warning-light">Urgent </span></td>
                                       <td>5 mins ago </td>
                                       <td class="text-warning">Pending Approval </td>
                                    </tr>
                                    <tr>
                                       <td>Desmopressin </td>
                                       <td>155 Strips </td>
                                       <td><span class="badge bg-info-light">Next Week </span></td>
                                       <td>1 days ago </td>
                                       <td class="text-success">On Time </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class="card">
                        <div class="card-header">
                           <h4 class="card-title">Reviews Score </h4>
                        </div>
                        <div class="card-body">
                           <div id="dsh_chart_ex_pie"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header no-border">
                     <h4 class="card-title float-left">Upcoming Appointments </h4>
                     <span class="float-right"><a href="appointments.html">View all </a></span>
                  </div>
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table mb-0">
                           <thead>
                              <tr>
                                 <th>ID </th>
                                 <th>Patient Name </th>
                                 <th>Age </th>
                                 <th>Date </th>
                                 <th>Time </th>
                                 <th>Disease </th>
                                 <th>Status </th>
                                 <th class="text-right">Action </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>APT0001 </td>
                                 <td><a href="patients-profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-03.jpg" class="rounded-circle m-r-5" alt="" /> Maurice Guz </a></td>
                                 <td>39 </td>
                                 <td>11 Dec 2020 </td>
                                 <td>10:00am-12:00am </td>
                                 <td>Cold </td>
                                 <td class="text-success">Approved </td>
                                 <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>APT0002 </td>
                                 <td><a href="patients-profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-07.jpg" class="rounded-circle m-r-5" alt="" /> Brandon Stone </a></td>
                                 <td>29 </td>
                                 <td>5 Dec 2020 </td>
                                 <td>10:00am-12:00am </td>
                                 <td>Fever </td>
                                 <td class="text-danger">Canceled </td>
                                 <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>APT0003 </td>
                                 <td><a href="patients-profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-06.jpg" class="rounded-circle m-r-5" alt="" /> Terry Baker </a></td>
                                 <td>42 </td>
                                 <td>6 Jan 2020 </td>
                                 <td>10:00am-12:00am </td>
                                 <td>heart </td>
                                 <td class="text-success">Approved </td>
                                 <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>APT0004 </td>
                                 <td><a href="patients-profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-04.jpg" class="rounded-circle m-r-5" alt="" /> Kyle Woodbury </a></td>
                                 <td>23 </td>
                                 <td>19 Dec 2020 </td>
                                 <td>10:00am-12:00am </td>
                                 <td>Diabeties </td>
                                 <td class="text-success">Approved </td>
                                 <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>APT0005 </td>
                                 <td><a href="patients-profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-05.jpg" class="rounded-circle m-r-5" alt="" /> Marie Gallardo </a></td>
                                 <td>55 </td>
                                 <td>15 Dec 2020 </td>
                                 <td>10:00am-12:00am </td>
                                 <td>Cold </td>
                                 <td class="text-success">Approved </td>
                                 <td class="text-right">
                                    <a href="#" class="btn btn-sm btn-white text-success mr-2"><i class="far fa-edit mr-1"></i> Edit </a>
                                    <a href="javascript:void(0);" class="btn btn-sm btn-white text-danger mr-2"><i class="far fa-trash-alt mr-1"></i>Delete </a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-4 d-flex flex-wrap">
                     <div class="card">
                        <div class="card-header no-border">
                           <h4 class="card-title float-left">Recent Visits </h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table mb-0">
                                 <thead>
                                    <tr>
                                       <th>Patients </th>
                                       <th class="text-right pt-0">Reports </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><a href="patients-profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-03.jpg" class="rounded-circle m-r-5" alt="" /> Maurice Guz </a></td>
                                       <td class="text-right">
                                          <a href="patients-profile.html" class="btn btn-sm btn-white text-success"><i class="far fa-eye mr-1"></i> View </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td><a href="patients-profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-05.jpg" class="rounded-circle m-r-5" alt="" /> Marie Gallardo </a></td>
                                       <td class="text-right">
                                          <a href="patients-profile.html" class="btn btn-sm btn-white text-success"><i class="far fa-eye mr-1"></i> View </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td><a href="patients-profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-04.jpg" class="rounded-circle m-r-5" alt="" /> Kyle Woodbury </a></td>
                                       <td class="text-right">
                                          <a href="patients-profile.html" class="btn btn-sm btn-white text-success"><i class="far fa-eye mr-1"></i> View </a>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td><a href="patients-profile.html"><img width="28" height="28" src="assets/img/profiles/avatar-06.jpg" class="rounded-circle m-r-5" alt="" /> Terry Baker </a></td>
                                       <td class="text-right">
                                          <a href="patients-profile.html" class="btn btn-sm btn-white text-success"><i class="far fa-eye mr-1"></i> View </a>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 d-flex flex-wrap">
                     <div class="card">
                        <div class="card-header no-border">
                           <h4 class="card-title float-left">Patients Group </h4>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table mb-0">
                                 <thead>
                                    <tr>
                                       <th>Issues </th>
                                       <th class="text-right pt-0">Count </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Cholesterol </td>
                                       <td class="text-right text-fade">5 Patients </td>
                                    </tr>
                                    <tr>
                                       <td>Diabetic </td>
                                       <td class="text-right text-fade">14 Patients </td>
                                    </tr>
                                    <tr>
                                       <td>Blood Pressure </td>
                                       <td class="text-right text-fade">10 Patients </td>
                                    </tr>
                                    <tr>
                                       <td>Hypertension </td>
                                       <td class="text-right text-fade">21 Patients </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 d-flex flex-wrap">
                     <div class="card">
                        <div class="card-header no-border">
                           <h4 class="card-title float-left">Doctors </h4>
                           <span class="float-right"><a href="appointments.html">View all </a></span>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table mb-0">
                                 <thead>
                                    <tr>
                                       <th>Doctor </th>
                                       <th class="text-right pt-0">Availabilty </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td><img src="assets/img/profiles/avatar-14.jpg" class="rounded-circle m-r-5 profile-img" alt="" />Dr.Jay Soni </td>
                                       <td class="text-success text-right">Available </td>
                                    </tr>
                                    <tr>
                                       <td><img src="assets/img/profiles/avatar-17.jpg" class="rounded-circle m-r-5 profile-img" alt="" />Dr.Sarah Smith </td>
                                       <td class="text-danger text-right">Absent </td>
                                    </tr>
                                    <tr>
                                       <td><img src="assets/img/profiles/avatar-18.jpg" class="rounded-circle m-r-5 profile-img" alt="" /> Dr.John Deo </td>
                                       <td class="text-success text-right">Available </td>
                                    </tr>
                                    <tr>
                                       <td><img src="assets/img/profiles/avatar-13.jpg" class="rounded-circle m-r-5 profile-img" alt="" />Dr.Kirsten Deleon </td>
                                       <td class="text-success text-right">Available </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div> --}}
            @yield('content')
         </div>
         <div class="notifications">
            <div class="topnav-dropdown-header">
               <span class="notification-title">Notifications </span>
               <a href="javascript:void(0)" class="clear-noti">  <i class="feather-x-circle"></i>  </a>
            </div>
            <div class="noti-content">
               <ul class="notification-list">
                  <li class="notification-message">
                     <a href="#">
                        <div class="media">
                           <span class="avatar">
                           <img alt="" src="assets/img/profiles/avatar-02.jpg" class="rounded-circle" />
                           </span>
                           <div class="media-body">
                              <p class="noti-details"><span class="noti-title">John Doe </span> added new task  <span class="noti-title">Patient appointment booking </span></p>
                              <p class="noti-time"><span class="notification-time">4 mins ago </span></p>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="notification-message">
                     <a href="#">
                        <div class="media">
                           <span class="avatar">
                           <img alt="" src="assets/img/profiles/avatar-03.jpg" class="rounded-circle" />
                           </span>
                           <div class="media-body">
                              <p class="noti-details"><span class="noti-title">Tarah Shropshire </span> changed the task ____  <span class="noti-title">Appointment booking with payment _______ </span></p>
                              <p class="noti-time"><span class="notification-time">6 mins ago </span></p>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="notification-message">
                     <a href="#">
                        <div class="media">
                           <span class="avatar">
                           <img alt="" src="assets/img/profiles/avatar-06.jpg" class="rounded-circle" />
                           </span>
                           <div class="media-body">
                              <p class="noti-details"><span class="noti-title">Misty Tison </span> added  <span class="noti-title">Domenic Houston </span> and  <span class="noti-title">Claire Mapes </span> to project  <span class="noti-title">Doctor available module </span></p>
                              <p class="noti-time"><span class="notification-time">8 mins ago </span></p>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="notification-message">
                     <a href="#">
                        <div class="media">
                           <span class="avatar">
                           <img alt="" src="assets/img/profiles/avatar-17.jpg" class="rounded-circle" />
                           </span>
                           <div class="media-body">
                              <p class="noti-details"><span class="noti-title">Rolland Webber </span> completed task  <span class="noti-title">Patient and Doctor video ____________ </span></p>
                              <p class="noti-time"><span class="notification-time">12 mins ago </span></p>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li class="notification-message">
                     <a href="#">
                        <div class="media">
                           <span class="avatar">
                           <img alt="" src="assets/img/profiles/avatar-13.jpg" class="rounded-circle" />
                           </span>
                           <div class="media-body">
                              <p class="noti-details"><span class="noti-title">Bernardo Galaviz </span> added new task  <span class="noti-title">Private chat module </span></p>
                              <p class="noti-time"><span class="notification-time">2 days ago </span></p>
                           </div>
                        </div>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="topnav-dropdown-footer">
               <a href="javascript:void(0);">View all Notifications </a>
            </div>
         </div>
      </div>
      <script src="{{ asset('admin/assets/js/jquery-3.6.0.min.js') }}"></script>
      <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
      <script src="{{ asset('admin/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
      <script src="{{ asset('admin/assets/plugins/apexchart/dsh-apaxcharts.js') }}"></script>
      <script src="{{ asset('admin/assets/plugins/simple-calendar/jquery.simple-calendar.js') }}"></script>
      <script src="{{ asset('admin/assets/js/calander.js') }}"></script>
      <script src="{{ asset('admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('admin/assets/plugins/datatables/datatables.min.js') }}"></script>
      <script src="{{ asset('admin/assets/plugins/select2/js/select2.min.js') }}"></script>
      <script src="{{ asset('admin/assets/js/form-validation.js') }}"></script>
      <script src="{{ asset('admin/assets/js/jquery.maskedinput.min.js') }}"></script>
      <script src="{{ asset('admin/assets/js/mask.js') }}"></script>
      <script src="{{ asset('admin/assets/js/script.js') }}"></script>

    {{-- <script>
      tinymce.init({
        selector: '#mytextarea',
        plugins: [
          'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
      });
    </script> --}}
     
      @yield('script')

   </body>
</html>