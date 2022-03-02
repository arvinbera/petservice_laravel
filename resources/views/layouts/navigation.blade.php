<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

        {{-- <x-nav-link href="{{ url('/') }}">
            <i class="fas fa-home"></i> {{ __('Home') }}
        </x-nav-link>

        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            <i class="fas fa-desktop"></i> {{ __('Dashboard') }}
        </x-nav-link> --}}
    </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ auth()->user()->getUrlfriendlyAvatar() }}"
                            class="user-image img-circle" alt="User Image">
                        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="{{ auth()->user()->getUrlfriendlyAvatar() }}"
                                class="img-circle elevation-2" alt="User Image">
                            <p>
                                {{ Auth::user()->name }}
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="{{ route('admin.profile.index') }}" class="btn btn-default btn-flat">Profile</a>
                            <a class="btn btn-default btn-flat float-right" href="{{ route('admin.logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sign out</a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>

    <!-- Right navbar links -->
    {{-- <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @auth

            <x-dropdown id="navbarDropdown" class="user-menu">
                <x-slot name="trigger">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </x-slot>

                <x-slot name="content">
                    <!-- Authentication -->
                    <form method="POST" id="logout-form" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        @endauth
    </ul> --}}
</nav>
<!-- /.navbar -->
