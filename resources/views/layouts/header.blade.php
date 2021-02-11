 <!-- Topbar header - style you can find in pages.scss -->
 <!-- ============================================================== -->

 <header class="topbar" data-navbarbg="skin6">
     <nav class="navbar top-navbar navbar-expand-md">
         <div class="navbar-header" data-logobg="skin6">
             <!-- This is for the sidebar toggle which is visible on mobile only -->
             <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                     class="ti-menu ti-close"></i></a>
             <!-- ============================================================== -->
             <!-- Logo -->
             <!-- ============================================================== -->
             <div class="navbar-brand">
                 <!-- Logo icon -->
                 <a href="{{ url('/') }}">
                     <b class="logo-icon">
                         <!-- Dark Logo icon -->
                         <img src="{{ asset('assets/img/main-logo.png') }}" alt="homepage" class="dark-logo"
                             width="30px" />
                     </b>
                     <!--End Logo icon -->
                     <!-- Logo text -->
                     <span class="logo-text">
                         <!-- dark Logo text -->
                         <img src="{{ asset('assets/img/logo.png') }}" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->
                         {{-- <img src="{{ asset('assets/images/logo-light-text.png') }}"
                             class="light-logo" alt="homepage" /> --}}
                     </span>
                 </a>
             </div>
             <!-- ============================================================== -->
             <!-- End Logo -->
             <!-- ============================================================== -->
             <!-- ============================================================== -->
             <!-- Toggle which is visible on mobile only -->
             <!-- ============================================================== -->
             <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                 data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                 aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
         </div>
         <!-- ============================================================== -->
         <!-- End Logo -->
         <!-- ============================================================== -->
         <div class="navbar-collapse collapse shadow-sm bg-white" id="navbarSupportedContent">
             <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                 <li class="nav-item header-title">
                     <h3 class="pl-md-3 position-relative title">
                         <b> @yield('title')</b>
                     </h3>
                 </li>
             </ul>
             <!-- ============================================================== -->
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                         aria-haspopup="true" aria-expanded="false">
                         <img src="{{ asset('assets/img/profil.jpg') }}" alt="user" class="rounded-circle" width="30">
                         <span class="ml-2 d-none d-lg-inline-block"><span class="">{{ $user->full_name }}</span> <i
                                 data-feather="chevron-down" class="svg-icon"></i></span>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">

                         <a class="dropdown-item" href="{{ url('maintenance') }}">
                             Lihat Profil</a>
                         <a class="dropdown-item" href="#modal-edit-password" data-toggle="modal">
                             Edit Password</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="{{ route('logout') }}">
                             Keluar</a>
                         <div class="dropdown-divider"></div>

                     </div>
                 </li>
                 <!-- ============================================================== -->
                 <!-- User profile and search -->
                 <!-- ============================================================== -->
             </ul>
         </div>
     </nav>
 </header>
 <!--  Modal content for the above example -->
 <div class="modal fade" id="modal-edit-password" tabindex="-1" role="dialog" aria-labelledby="editPasswordModal"
     aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
             <form action="{{ url('/admin/edit/password') }}" method="post">
                 @csrf
                 <div class="modal-header">
                     <h4 class="modal-title" id="editPasswordModal">Edit Password</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 </div>
                 <div class="modal-body">
                     <div class="form-group row">
                         <label for="oldPassword" class="col-sm-3 col-form-label">Password Lama</label>
                         <div class="col-sm-9">
                             <input name="old_password" type="password"
                                 class="form-control @error('old_password') is-invalid @enderror" id="oldPassword"
                                 placeholder="Masukkan Password Lama" required="">
                             @error('old_password')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>

                     <div class="form-group row">
                         <label for="newPassword" class="col-sm-3 col-form-label">Password Baru</label>
                         <div class="col-sm-9">
                             <input name="new_password" type="password"
                                 class="form-control @error('new_password') is-invalid @enderror" id="newPassword"
                                 placeholder="Masukkan Password Baru" required="">
                             @error('new_password')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>

                     <div class="form-group row">
                         <label for="newPassword" class="col-sm-3 col-form-label">Konfirmasi Baru</label>
                         <div class="col-sm-9">
                             <input name="new_confirm_password" type="password"
                                 class="form-control @error('new_confirm_password') is-invalid @enderror"
                                 id="newPassword" placeholder="Konfirmasi Password Baru" required="">
                             @error('new_confirm_password')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
                     </div>

                     <div class="form-group text-center">
                         <button class="btn btn-danger m-2" type="reset" data-dismiss="modal">Batal</button>
                         <button class="btn btn-primary m-2" type="submit">Ubah Password</button>
                     </div>
                 </div>
             </form>
         </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->
 <!-- ============================================================== -->
 <!-- End Topbar header -->
