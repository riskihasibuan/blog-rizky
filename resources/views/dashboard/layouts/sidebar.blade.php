<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse ">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href={{ url('/dashboard') }}>
                    <span><i class="fa-solid fa-house"></i></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="{{url('/dashboard/posts')}}">
                <i class="fa-regular fa-file"></i>
                    My Posts
                </a>
            </li>
        </ul>
    </div>
</nav>