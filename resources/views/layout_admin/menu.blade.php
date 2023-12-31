        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('assets/images/poliwangi.png') }}" alt="Politeknik Negri Banyuwangi"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"> Informatika</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-1 d-flex">
                    <div class="image">
                        <img src="{{ Storage::url(Auth::user()->picture) }}"
                            class="img-circle elevation-2 admin_picture" alt="User Image">
                    </div>
                    <div class="info">
                        <h6 class="text-white">{{ Auth::user()->name }}</h6>
                        {{-- <p class="text-gray">Adminstrator</p> --}}
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-1">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        {{-- @if (auth()->user()->role_id == 1) --}}
                        <li class="nav-item">
                            <a href="{{ route('admin') }}" class="nav-link" id="Dashboard">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p> Dashboard</p>
                            </a>
                        </li>
                         
                            <li class="nav-item">
                                <a href="{{ route('event.index') }}" class="nav-link" id="event">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p> event </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="{{ route('magang.index') }}" class="nav-link" id="Magang">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p> Kerjasama & Magang </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('staff.index') }}" class="nav-link" id="Staff">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p> Staff </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('teknisi.index') }}" class="nav-link" id="Teknisi">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p> Teknisi </p>
                                </a>
                            </li>

                            <li class="nav-item has-treeview" id="mastermanagement">
                                <a href="#" class="nav-link" id="usermanagement">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p> Users Management
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('permission.index') }}"
                                            class="nav-link {{ request()->is('admin/permission') || request()->is('admin/permission/*') ? 'active' : '' }}"
                                            id="permission">
                                            <i class="nav-icon fas fa-unlock"></i>
                                            {{ 'Permission' }}
                                        </a>
                                    </li>
                                </ul>

                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('roles.index') }}"
                                            class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}"
                                            id="Roles">
                                            <i class="nav-icon fas fa-briefcase"></i>
                                            {{ 'Roles' }}
                                        </a>
                                    </li>
                                </ul>
                                {{-- @can('user_access') --}}
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('users.index') }}" class="nav-link" id="users">
                                            <i class="nav-icon fas fa-user"></i>
                                            <p>Users </p>
                                        </a>
                                    </li>
                                </ul>
                                {{-- @endcan --}}
                            </li>
                        {{-- @endif --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
