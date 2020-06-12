@extends("layouts.layout")

@push("menuItems")
    <li class="nav-item {{ (strpos(Route::currentRouteName(), 'Home') === 0) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('Home') }}">
            <i class="tim-icons icon-app"></i>
            Home
        </a>
    </li>

    <li class="nav-item {{ (strpos(Route::currentRouteName(), 'List') === 0) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('List') }}">
            <i class="tim-icons icon-link-72"></i>
            List
        </a>
    </li>

    <li class="nav-item {{ (strpos(Route::currentRouteName(), 'InjMethods') === 0) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('InjMethods') }}">
            <i class="tim-icons icon-button-power"></i>
            Injection Methods
        </a>
    </li>

    <li class="nav-item {{ (strpos(Route::currentRouteName(), 'Prints') === 0) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('Prints') }}">
            <i class="tim-icons icon-upload"></i>
            Prints
        </a>
    </li>
@endpush
