<nav class="navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container px-1">
        <ul class="navbar-nav flex-row auto-overflow">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <span class="fs-7">Overview</span>
                </a>
            </li>
            @can('is-head-admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.admins.index') }}">
                        <span class="fs-7">Admins</span>
                    </a>
                </li>
            @endcan
        </ul>
    </div>
</nav>
