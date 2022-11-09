<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Menu Heading (Core)-->
                <div class="sidenav-menu-heading">{{ __('Core') }}</div>
                <!-- Sidenav Accordion (Dashboard)-->
                <a class="nav-link collapsed" href="{{ route('welcome') }}">
                    <div class="nav-link-icon"><i data-feather="slack"></i></div>
                    {{ __('Dashboard') }}
                </a>

                @can('IsAdmin')
                    <!-- Nested Sidenav Accordion (Apps -> User Management)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#appsCollapseUserManagement" aria-expanded="false"
                        aria-controls="appsCollapseUserManagement">
                        <div class="nav-link-icon"><i data-feather="users"></i></div>
                        {{ __('User Management') }}
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="appsCollapseUserManagement" data-bs-parent="#accordionSidenavAppsMenu">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('admin.roles.index') }}">{{ __('Roles') }}</a>
                            <a class="nav-link" href="{{ route('admin.permissions.index') }}">{{ __('Permissions') }}</a>
                            <a class="nav-link" href="{{ route('admin.users.index') }}">{{ __('Users List') }}</a>
                        </nav>
                    </div>
                @endcan
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">{{ __('Logged in as:') }}</div>
                <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
            </div>
        </div>
    </nav>
</div>
