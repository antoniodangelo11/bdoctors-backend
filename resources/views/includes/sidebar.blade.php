<nav class="app-sidebar">
    <ul class="app-sidebar-menu">

        @guest
            {{-- Guest Links --}}
            <li>
                <a href="{{ route('guest.home') }}" class="@if (Route::is('guest.home')) active @endif">
                    <i class="fas fa-home fa-lg fa-fw"></i>
                    <span class="fw-bold ms-1">{{ __('Home') }}</span>
                </a>
            </li>
        @else
            {{-- AuthLinks --}}
            <li>
                <a href="{{ route('admin.home') }}" class="@if (Route::is('admin.home')) active @endif">
                    <i class="fas fa-home fa-lg fa-fw"></i>
                    <span class="ms-1">{{ __('Dashboard') }}</span>
                </a>
            </li>
        @endguest

    </ul>
</nav>
