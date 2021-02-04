    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('dashboard') }}"
                            aria-expanded="false"><i class="fas fa-home mr-2"></i><span
                                class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    @if (Auth::guard('web')->user()->level == 'superadmin')
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" id="admin-menu"
                                href="{{ url('/admin') }}" aria-expanded="false"><i class="fas fa-user"></i><span
                                    class="hide-menu">Data Admin</span>
                            </a>
                        </li>
                    @endif
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Tentang Desa</span></li>

                    <li class="sidebar-item"> <a class="sidebar-link"
                            href="{{ url('/profil-kalurahan') }}"" aria-expanded=" false"><i
                                class="far fa-building"></i><span class="hide-menu">Profil Kalurahan
                            </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('/info-desa') }}"
                            aria-expanded="false"><i class=" fas fa-info-circle"></i><span class="hide-menu">Info
                                Kalurahan</span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('/potensi-desa') }}"
                            aria-expanded="false"><i data-feather="globe" class="feather-icon"></i><span
                                class="hide-menu">Potensi Kalurahan</span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('data-penduduk') }}"
                            aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Data Penduduk
                            </span></a>
                    </li>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Layanan dan Aduan</span></li>
                    <li class="sidebar-item"> <a href="{{ url('/info-layanan') }}" class="sidebar-link"
                            aria-expanded="false"><i class="fas fa-question"></i><span class="hide-menu">Info
                                Layanan
                            </span></a>
                    </li>
                    <li id="sidebarService" class="sidebar-item"> <a class="sidebar-link" href="{{ url('service') }}"
                            aria-expanded="false"><i class="fab fa-servicestack"></i><span class="hide-menu">Layanan
                            </span></a>

                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link" href="{{ url('aduan') }}"
                            aria-expanded="false"><i class="fas fa-volume-up"></i><span class="hide-menu">Aduan
                            </span></a>
                    </li>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Laporan</span></li>

                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                            href="{{ url('statistik-layanan') }}" aria-expanded="false"><i
                                class="fas fa-chart-bar"></i><span class="hide-menu">Statistik
                            </span></a>
                    </li>
                    {{-- <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                            href="{{ url('statistik-aduan') }}" aria-expanded="false"><i data-feather="lock"
                                class="feather-icon"></i><span class="hide-menu">Statistik Data Aduan
                            </span></a>
                    </li> --}}
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
