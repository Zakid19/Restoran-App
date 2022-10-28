<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="{{ route('dashboard') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-home"></i>
                <span class="nav-text">Frontend</span>
            </a>
            </li>

            @if (Auth::user())
            <li><a href="{{ route('admin.category.index') }}" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Categories</span>
                </a>
            </li>

            <li><a href="{{ route('admin.menu.index') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-menu"></i>
                <span class="nav-text">Menu</span>
            </a>
            </li>

            <li><a href="{{ route('admin.table.index') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-network"></i>
                <span class="nav-text">Table</span>
            </a>

            <li><a href="{{ route('admin.reservation.index') }}" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-settings-2"></i>
                <span class="nav-text">Reservation</span>
            </a>
            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-user"></i>
                    <span class="nav-text">Admin</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.index') }}">Profile</a></li>
                </ul>

            </li>

            @endif
        </ul>
    </div>
</div>
