    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('/') }}"
                            aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" id="admin-menu"
                            href="{{ url('/admin') }}" aria-expanded="false"><i data-feather="home"
                                class="feather-icon"></i><span class="hide-menu">Data Admin</span>
                        </a>
                    </li>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Tentang Desa</span></li>

                    <li class="sidebar-item"> <a class="sidebar-link"
                            href="{{ url('/profil-kalurahan') }}"" aria-expanded=" false"><i data-feather="tag"
                                class="feather-icon"></i><span class="hide-menu">Profil Kalurahan
                            </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ url('/info-desa') }}"
                            aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                class="hide-menu">Info Desa</span></a></li>

                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Layanan dan Aduan</span></li>
                    <li class="sidebar-item"> <a href="javascript:void(0)" class="sidebar-link has-arrow"
                            aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                class="hide-menu">Info Layanan </span></a>
                        <ul aria-expanded="false" class="collapse first-level base-level-line">
                            <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link has-arrow"><span
                                        class="hide-menu">Layanan A
                                    </span></a>
                                <ul aria-expanded="false" class="collapse second-level base-level-line">
                                    <li class="sidebar-item"><a href="info-layanan-syarat" class="sidebar-link"><span
                                                class="hide-menu">Syarat</span></a></li>
                                    <li class="sidebar-item"><a href="{{ url('info-layanan-alur') }}"
                                            class="sidebar-link"><span class="hide-menu">Alur</span></a></li>
                                </ul>
                            </li>
                            <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link has-arrow"><span
                                        class="hide-menu">Layanan B
                                    </span></a>
                                <ul aria-expanded="false" class="collapse second-level base-level-line">
                                    <li class="sidebar-item"><a href="javascript:void(0)"
                                            class="sidebar-link has-arrow"><span class="hide-menu">Syarat</span></a>
                                    </li>
                                    <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                                class="hide-menu">Alur</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                class="hide-menu">Layanan </span></a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item"><a href="layanan" class="sidebar-link"><span
                                        class="hide-menu"> Layanan A
                                    </span></a>
                            </li>
                            <li class="sidebar-item"><a href="table-dark-basic.html" class="sidebar-link"><span
                                        class="hide-menu"> Layanan B
                                    </span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                            aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span
                                class="hide-menu">Aduan </span></a>
                    </li>
                    <li class="list-divider"></li>
                    <li class="nav-small-cap"><span class="hide-menu">Laporan</span></li>

                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="data-penduduk-desa"
                            aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span
                                class="hide-menu">Data Penduduk
                            </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                            aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span
                                class="hide-menu">Statistik Data Layanan
                            </span></a>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-register1.html"
                            aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span
                                class="hide-menu">Statistik Data Aduan
                            </span></a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
