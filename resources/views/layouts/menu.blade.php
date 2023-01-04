<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
    @auth
        @php
            $menus = Auth::user()->role->role_feature;
        @endphp
        @foreach ($menus as $menu)
            <a href="{{route($menu->feature->name)}}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>{{$menu->feature->name}}</p>
            </a>
        @endforeach
    @endauth
</li>
